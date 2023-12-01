<script setup>
import {
    Table,
    TableHead,
    TableCell,
    TableBody,
    TableRow,
} from 'flowbite-vue'
</script>

<template>
    <Table hoverable>
        <TableHead>
            <TableCell>Name</TableCell>
            <TableCell>Time</TableCell>
            <TableCell>Size</TableCell>
            <TableCell>
                <span class="sr-only">Edit</span>
            </TableCell>
        </TableHead>
        <TableBody class="overflow-x-scroll ">
            <TableRow v-for="storage in storages"> 
                <TableCell class="flex items-center gap-5 flex-wrap">
                    {{ storage.file_name }}
                    <img  :src="storage ? (storage.file_data) : ''" alt="" sizes="" srcset="" class="w-40 h-20">
                
                </TableCell>
                <TableCell> {{ storage.file_type }}</TableCell>
                <TableCell> {{ storage.created_at }}</TableCell>
                <TableCell>
                </TableCell>
            </TableRow>
        </TableBody>
    </Table>
</template>

<script>
export default {
    props: ["storages"],
    mounted() {
        console.log("storages prop:", this.storages);
    }
};
</script>

