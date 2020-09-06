<template>
    <div class="w-full max-w-lg px-2 py-2 sm:px-6 sm:py-6">
        <form class="bg-white shadow-md rounded px-2 py-2 sm:px-8 sm:py-6 mb-4" method="POST" action="/register">
            <input type="hidden" name="_token" :value="csrf">
            <div class="mb-4">
                <input class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" name="first_name" type="text" placeholder="Your first name">
            </div>
            <div class="mb-4">
                <input class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" name="last_name" type="text" placeholder="Your last name">
            </div>
            <div class="mb-4">
                <input class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Your email">
            </div>
            <div class="relative mb-4">
                <input class="block shadow appearance-none border w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" :type="showPwd ? 'text' : 'password'" placeholder="Your password">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-4">
                    <svg @click="showPwd = !showPwd"
                         :class="{'hidden': !showPwd, 'block':showPwd }"
                         class="h-6 w-6 fill-current"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20"><path d="M18.521 1.478a1 1 0 0 0-1.414 0L1.48 17.107a1 1 0 1 0 1.414 1.414L18.52 2.892a1 1 0 0 0 0-1.414zM3.108 13.498l2.56-2.56A4.18 4.18 0 0 1 5.555 10c0-2.379 1.99-4.309 4.445-4.309.286 0 .564.032.835.082l1.203-1.202A12.645 12.645 0 0 0 10 4.401C3.44 4.4 0 9.231 0 10c0 .423 1.057 2.09 3.108 3.497zm13.787-6.993l-2.562 2.56c.069.302.111.613.111.935 0 2.379-1.989 4.307-4.444 4.307-.284 0-.56-.032-.829-.081l-1.204 1.203c.642.104 1.316.17 2.033.17 6.56 0 10-4.833 10-5.599 0-.424-1.056-2.09-3.105-3.495z"/></svg>

                    <svg @click="showPwd = !showPwd"
                         :class="{'block': !showPwd, 'hidden':showPwd }"
                         class="h-6 w-6 fill-current"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20"><path d="M10 4.4C3.439 4.4 0 9.232 0 10c0 .766 3.439 5.6 10 5.6 6.56 0 10-4.834 10-5.6 0-.768-3.44-5.6-10-5.6zm0 9.907c-2.455 0-4.445-1.928-4.445-4.307 0-2.379 1.99-4.309 4.445-4.309s4.444 1.93 4.444 4.309c0 2.379-1.989 4.307-4.444 4.307zM10 10c-.407-.447.663-2.154 0-2.154-1.228 0-2.223.965-2.223 2.154s.995 2.154 2.223 2.154c1.227 0 2.223-.965 2.223-2.154 0-.547-1.877.379-2.223 0z"/></svg>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <button class="block bg-taxi-500 hover:bg-taxi-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
    import { mapGetters } from "vuex"
    export default {
        data() {
            return {
                showPwd: false,
            }
        },
        computed: {
            ...mapGetters('global', [
                'csrf'
            ]),
        },
    }
</script>
