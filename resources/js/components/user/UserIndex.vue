<template>
    teste 123xzxx
</template>

<script>
    import useUsers from './user'
    import {onMounted} from 'vue'
    export default {

        setup() {
            const  {users, getUsers} = useUsers()
            onMounted(getUsers)

            return {
                users
            }
        },
    }
</script>


