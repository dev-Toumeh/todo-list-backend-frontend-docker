import {ChangeEvent, FormEvent, useState} from "react";
import TodoInterface, {AddTodoProps} from "../interfaces/TodoInterface";
import {v4} from 'uuid'

function AddTodo({onAddTodo}: AddTodoProps) {
    const [todo, setTodo] = useState<TodoInterface>({completed: false, id: v4(), title: ""});
    const handleSubmit = (event: FormEvent<HTMLFormElement>) => {
        event.preventDefault();
        onAddTodo(todo);
    }

    const handleChange = (event: ChangeEvent<HTMLInputElement>) => {
        const {value} = event.target;
        setTodo({
            id: v4(),
            title: value,
            completed: false
        });
    }
    return (
        <form onSubmit={handleSubmit} className="bg-white p-4 rounded shadow-md">
            <div>
                <label htmlFor="todo-title">New Todo</label>
                <input type="text" name="todo-title" value={todo.title} onChange={handleChange} />
            </div>
            <button type="submit">Add Todo</button>
        </form>
    );
}

export default AddTodo