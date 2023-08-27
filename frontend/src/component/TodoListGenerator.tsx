import todoInterface, {onCompletedInterface} from "../interfaces/TodoInterface";
import React, {JSX} from "react";


function TodoListGenerator ({onCompleted, todolist}: onCompletedInterface): React.JSX.Element {


    const renderedToDoList: JSX.Element[] | undefined =  todolist?.map((item: todoInterface
    ) => {
        return (
            <li key={item.id} className="flex items-center mb-2">
                <input type="checkbox"
                       checked={item.completed}
                       onChange={() => onCompleted(item.id)}
                       className="mr-2 rounded focus:ring-blue-500 h-4 w-4"
                />
                {item.title}
            </li>
        );
    });

    return (
        <div className="mt-4">
            <ul>
                {renderedToDoList}
            </ul>
        </div>
    )
}

export default TodoListGenerator;