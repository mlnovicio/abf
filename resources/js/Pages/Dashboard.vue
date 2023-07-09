<script setup>
import Nlayout from '@/Layouts/Nlayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Dashboard" />

    <Nlayout>
      
        <div class="place-content-between grid grid-cols-2 mt-20">
            <div>
            
            </div>
             <div>
            <div class="relative  w-60 float-right">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500  dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                </div>
                    <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>                    
            </div>
        </div>

                
        </div>
        

        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 border uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-black">
                    Media Type
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Manufacturer
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Model
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Serial No
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Owning Dept.
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Site.
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    USB Flash Drive
                </td>
                <td class="px-6 py-4">
                    Kingstone
                </td>
                <td class="px-6 py-4">
                    USB Memory
                </td>
                <td class="px-6 py-4">
                    123415467
                </td>
                <td class="px-6 py-4">
                    MIS
                </td>
                <td class="px-6 py-4">
                    HO
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Borrowed
                    </div>
                </td>
                <td class="px-6 py-4">
                    <Link href="/blcreate"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </Link>
                </td>
            </tr>
            <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Asus
                </td>
                <td class="px-6 py-4">
                    Office Laptop
                </td>
                <td class="px-6 py-4">
                    23145678978
                </td>
                <td class="px-6 py-4">
                    MIS
                </td>
                <td class="px-6 py-4">
                    HO
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Open
                    </div>
                </td>
                <td class="px-6 py-4">
                    <Link href="/blcreate"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                   
                    </Link>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<!--paginator-->
<Pagination />
<!--paginator-->
        
    </Nlayout>
</template>
