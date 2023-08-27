
interface TodoInterface {
    id: string;
    title: string;
    completed: boolean;
}

interface AddTodoProps {
    onAddTodo: (newTodo: TodoInterface) => void;
}

interface onCompletedInterface {
    onCompleted: (id: string) => void,
    todolist: TodoInterface[] | undefined,
    newString?: string
}
export type {AddTodoProps, onCompletedInterface};
export default TodoInterface;