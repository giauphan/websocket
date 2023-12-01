<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    file: null,
})

const submit = () => {
    form.post(('/upload'), {
        forceFormData: true,
    });
};

async function uploadFile() {
    
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await fetch('/upload', {
            method: 'POST',
            body: form,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
        });

        if (response.ok) {
            console.log('success');
        } else {
            console.error('upload failed');
        }
    } catch (error) {
        console.error('error:', error);
    }
}
</script>

<template>
    <form @submit.prevent="submit" enctype="multipart/form-data">
        <input type="file" @input="form.file = $event.target.files[0]" name="file" />
        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
            {{ form.progress.percentage }}%
        </progress>
        <button type="submit">Submit</button>
    </form>
</template>

