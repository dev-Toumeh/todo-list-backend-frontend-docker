import React from 'react';
import {useState, useEffect} from "react";
import './App.css';
import TodoInterface from "./interfaces/TodoInterface";
import AddTodo from "./component/AddTodo";
import TodoListGenerator from "./component/TodoListGenerator";
import {v4 as uuidv4 } from 'uuid';
import axios from "axios";

function App() {

    const [toDoList, setToDoList] = useState<TodoInterface[]>();

    const fetchToDoList = async () => {
        const response = await axios.get('http://localhost');
        setToDoList([...response.data]);
    }

    useEffect(() => {
        fetchToDoList()
    },[]);

    const handleCompleted = (id: string) => {
        setToDoList((oldList) => {
            return oldList?.map((todo: TodoInterface) => {
                if (todo.id === id) {
                    return {...todo, completed: !todo.completed};
                }
                return todo;
            })
        })
    }

    const handleAddTodo = async (newTodo: TodoInterface) =>{
        try {
            const response = await axios.post('http://localhost', newTodo);
            // Assuming the response contains the updated todo list data, update the state.
            setToDoList([...response.data]);
        } catch (error) {
            // Handle any potential errors here.
            console.error('Error adding todo:', error);
        }
    }
    return (
        <div className="flex flex-col items-center justify-center h-screen">
            <AddTodo onAddTodo={handleAddTodo}/>
            <TodoListGenerator todolist={toDoList} onCompleted={handleCompleted}/>
        </div>
    );
}

export default App;

