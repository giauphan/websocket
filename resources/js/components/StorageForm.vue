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
        <TableBody>
            <TableRow v-for="storage in storages"> 
                <TableCell class="flex">
                    <img  :src="storage ? (storage.thumbnail_data) : ''" alt="" sizes="" srcset="">
                    {{storage && storage.thumbnail_name }}
                </TableCell>
                <TableCell> {{storage && storage.type }}</TableCell>
                <TableCell> {{storage && storage.created_at }}</TableCell>
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

