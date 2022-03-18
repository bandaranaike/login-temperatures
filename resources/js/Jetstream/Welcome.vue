<template>
    <div>
        <div class="p-6 sm:pl-14 bg-white border-b border-gray-200">

            <div class="mt-8 text-5xl">
                Login Temperatures
            </div>

            <div class="text-right">
                <button class="bg-red-600 text-white px-3 py-1 mr-3 rounded-sm">Hottest First</button>
                <button class="bg-violet-600 text-white px-3 py-1 rounded-sm">Reset Order</button>
            </div>

        </div>

        <div class="bg-gray-200 bg-opacity-25">
            <div class="p-6">
                <table class="table border-collapse border border-slate-400 ">
                    <thead>
                    <tr>
                        <th class="border border-slate-300 p-4 text-4xl" colspan="3">Colombo</th>
                        <th class="border border-slate-300 p-4 text-4xl" colspan="3">Melbourne</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border border-slate-300 p-4">Wed, 10 Jully 2022, 15.23pm</td>
                        <td class="border border-slate-300 p-4">33C</td>
                        <td class="border border-slate-300 p-4">100F</td>
                        <td class="border border-slate-300 p-4">Wed, 10 Jully 2022, 15.23pm</td>
                        <td class="border border-slate-300 p-4">33C</td>
                        <td class="border border-slate-300 p-4">100F</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

export default defineComponent({
    components: {
        JetApplicationLogo,
    },
})
</script>
