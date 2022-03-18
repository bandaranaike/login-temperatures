<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:pl-14 bg-white border-b border-gray-200">

                        <div class="mt-8 text-5xl">
                            Login Temperatures
                        </div>

                        <div class="text-right">
                            <button class="bg-red-600 text-white px-3 py-1 mr-3 rounded-sm"
                                    @click="getTempList('celsius')">Hottest First
                            </button>
                            <button class="bg-violet-600 text-white px-3 py-1 rounded-sm" @click="getTempList(null)">
                                Reset Order
                            </button>
                        </div>

                    </div>

                    <div class="bg-gray-200 bg-opacity-25">
                        <div class="p-6">

                            <div class="grid grid-cols-2">
                                <div class=" p-4 text-3xl" colspan="3"
                                     v-for="userCity in userCities">{{ userCity.name }}
                                </div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div v-for="cityTemperatures in loginTemperatures">
                                    <div v-for="cityTemperature in cityTemperatures" class="grid grid-cols-5">
                                        <td class="p-3 col-span-3">
                                            {{ cityTemperature.created_at }}
                                        </td>
                                        <td class=" p-3">{{ cityTemperature.celsius }}°C</td>
                                        <td class=" p-3">{{ cityTemperature.fahrenheit }}°F</td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'

export default defineComponent({
    props: ["initLoginTemperatures", "userCities"],
    components: {
        AppLayout,
        Welcome,
    },
    data() {
        return {
            loginTemperatures: null
        }
    },
    methods: {
        getTempList(orderBy) {
            axios.get(route("temp-list") + `?order-by=${orderBy}`).then(r => {
                this.loginTemperatures = r.data;
            })
        }
    },
    mounted() {
        this.loginTemperatures = this.initLoginTemperatures;
    }
})
</script>
