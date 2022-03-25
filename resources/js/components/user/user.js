import axios from 'axios'
import { ref } from 'vue'

export default function useUsers() {
    const users = ref([])

    const getUsers = async() => {
        let response = await axios.get('http://localhost/SNJ/public/api/user')
        users.value = response.data
        console.log(users.value[0])
    }
    return {
        users,
        getUsers
    }
}
