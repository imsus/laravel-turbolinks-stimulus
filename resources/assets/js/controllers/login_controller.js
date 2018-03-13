import { Controller } from 'stimulus'
import axios from 'axios'

export default class extends Controller {
    static targets = ['email', 'password', 'form']

    connect() {
    }

    async submit(event) {
        event.preventDefault()
        window.Turbolinks.clearCache()

        try {
            const {headers} = await axios.post('/login', {
                email: this.emailTarget.value,
                password: this.passwordTarget.value
            })
            window.Turbolinks.visit(headers['turbolinks-location'], { action: 'replace' })
        } catch (error) {
            alert(error)
        }
    }
}