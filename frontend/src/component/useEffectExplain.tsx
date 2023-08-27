import {useState, useEffect} from "react";

interface DemoProps{}

function Demo({}: DemoProps) {
    const [count, setCount] = useState(0);
    useEffect(() => {}, [ ]);
    //the code that we want to execute every time the count changes
    return (
        <div>
            <h1>Count: {count}</h1>
            <button onClick={() => setCount(count + 1)}>
                increase count
            </button>
            <button onClick={() => setCount(count - 1)}>
                decrease count
            </button>
        </div>
    );
}

export default Demo;