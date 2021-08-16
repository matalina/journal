<template>
    <div class="p-2 bg-yellow-100 border-yellow-700 border text-yellow-700 rounded my-1">
        There are no items in this {{ name }}.
    </div>
</template>

<script>
export default {
    name: 'empty-list',
    props: ['name'],
}
</script>