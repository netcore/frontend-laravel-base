import Lodash from 'lodash'
global._ = global.Lodash = Lodash

import 'bootstrap/js/dist/dropdown'
import 'bootstrap/js/dist/modal'
import 'bootstrap/js/dist/tab'
import 'bootstrap/js/dist/collapse'

import Axios from 'axios'
global.Axios = Axios
global.Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'











let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    global.Axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

