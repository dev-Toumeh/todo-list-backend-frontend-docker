import React from 'react';
import {useState, useEffect} from "react";
import './App.css';
import TodoInterface from "./interfaces/TodoInterface";
import AddTodo from "./component/AddTodo";
import TodoListGenerator from "./component/TodoListGenerator";
import {v4 as uuidv4 } from 'uuid';
import axios from "axios";

function App() {

    const originalToDoList: TodoInterface[] = [
        // {
        //     id: '222',
        //     title: 'Buy groceries',
        //     completed: false
        // },
        // {
        //     id: '34343hhhg',
        //     title: 'Call mom',
        //     completed: false
        // },
        // {
        //     id: uuidv4(),
        //     title: 'Call dad',
        //     completed: false
        // }
    ]
    const [toDoList, setToDoList] = useState<TodoInterface[]>(originalToDoList);

    const fetchToDoList = async () => {
        const response = await axios.get('http://localhost');
        console.log(response);
        setToDoList([...response.data]);
    }

    useEffect(() => {
        fetchToDoList()
    },[]);

    const handleCompleted = (id: string) => {
        setToDoList((oldList: TodoInterface[]) => {
            return oldList.map((todo: TodoInterface) => {
                if (todo.id === id) {
                    return {...todo, completed: !todo.completed};
                }
                return todo;
            })
        })
    }

    const handleAddTodo = async (newTodo: TodoInterface) =>{
        const response = await axios.post('http://localhost:3001/todos', newTodo);
        setToDoList((oldList: TodoInterface[]) => [...oldList, response.data]);
    }
    return (
        <div className="flex flex-col items-center justify-center h-screen">
            <AddTodo onAddTodo={handleAddTodo}/>
            <TodoListGenerator todolist={toDoList} onCompleted={handleCompleted}/>
        </div>
    );
}

export default App;

