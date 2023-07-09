<script setup>
import Nlayout from '@/Layouts/Nlayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    user_id: '',
    item_id: '',
    control_no: '',
    date_borrowed: '',
    date_return_plan: '',
    loc_for_use: '',
    purpose: '',
    lent_by: '',
});

const submit = () => {
    form.post(route('BorrowersLog.store'), {
       onFinish: () => form.reset('date_borrowed', 'date_return_plan', 'loc_for_use', 'purpose', 'lent_by'),
    });
};
</script>
 
<template>
    <Head title="Borrowers Log" />
 
    <Nlayout>
        <div class="container mt-20">       
            <div class="p-3  bg-gray-400 container border-gray-200 rounded-t-sm">
              <p class="text-white font-black">Borrower's Log Form (BORROW)</p>
            </div>
        <div class="p-3 border-2 border-gray-400 container rounded-b-sm">
        
            <form @submit.prevent="submit">
          
<div class="grid grid-cols-3 gap-4 place-content-stretch">

    <div  class="m-4">
                <InputLabel for="item_id" value="item_id" />

                <TextInput
                    id="item_id"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.item_id"
                    required
                    autofocus
                    autocomplete="item_id"
                 
                />

                <InputError class="mt-2" :message="form.errors.item_id" />
            </div>

    <div  class="m-4">
                <InputLabel for="user_id" value="user_id" />

                <TextInput
                    id="user_id"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.user_id"
                    required
                    autofocus
                    autocomplete="user_id"
                   
                />

                <InputError class="mt-2" :message="form.errors.user_id" />
            </div>


            <div  class="m-4">
                <InputLabel for="control_no" value="Control No." />

                <TextInput
                    id="control_no"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.control_no"
                    required
                    autofocus
                    autocomplete="control_no"
                />

                <InputError class="mt-2" :message="form.errors.control_no" />
            </div>

            <div  class="m-4">
                <InputLabel for="date_borrowed" value="Date Borrowed." />

                <TextInput
                    id="date_borrowed"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.date_borrowed"
                    required
                    autofocus
                    autocomplete="date_borrowed"
                />

                <InputError class="mt-2" :message="form.errors.date_borrowed" />
            </div>

            <div  class="m-4">
                <InputLabel for="date_return_plan" value="Return Plan Date" />

                <TextInput
                    id="date_return_plan"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.date_return_plan"
                    required
                    autofocus
                    autocomplete="date_return_plan"
                />

                <InputError class="mt-2" :message="form.errors.date_return_plan" />
            </div>

            <div  class="m-4">
                <InputLabel for="loc_for_use" value="Location for use" />

                <TextInput
                    id="loc_for_use"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.loc_for_use"
                    required
                    autofocus
                    autocomplete="loc_for_use"
                />

                <InputError class="mt-2" :message="form.errors.loc_for_use" />
            </div>

            <div  class="m-4">
                <InputLabel for="purpose" value="Prupose" />

                <TextInput
                    id="purpose"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.purpose"
                    required
                    autofocus
                    autocomplete="purpose"
                />

                <InputError class="mt-2" :message="form.errors.purpose" />
            </div>

            <div  class="m-4">
                <InputLabel for="lent_by" value="Lent By" />

                <TextInput
                    id="lent_by"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.lent_by"
                    required
                    autofocus
                    autocomplete="lent_by"
                />

                <InputError class="mt-2" :message="form.errors.lent_by" />
            </div>
</div>           

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Submit
                </PrimaryButton>
            </div>
        </form>
        </div>
    </div>
    </Nlayout>
</template>