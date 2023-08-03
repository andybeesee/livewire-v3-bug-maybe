<div>
    <div style="font-weight: 700">Tasks</div>

    <div
        x-data="{
            tasks: @entangle('tasks'),
            add() {
                $wire.set('tasks', [...this.tasks, { id: Math.random().toFixed(5), name: Math.random() }])
            },
            remove(index) {
                const updatedTasks = [];

                for(x in this.tasks) {
                    if(x != index) {
                        updatedTasks.push(this.tasks[x]);
                    }
                }

                $wire.set('tasks', updatedTasks);
            },
        }"
        style="display: grid;"
    >
        <button @click="add" style="width: 100px; text-align: left" type="button">Add Task</button>
        <template x-for="(task, index) in tasks" key="task.id">
            <div @click="remove(index)">
                <span x-text="task.id"></span>
                <span x-text="task.name"></span>
            </div>
        </template>
    </div>
</div>
