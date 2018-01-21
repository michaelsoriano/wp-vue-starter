<template id="search-form">
<input class="form-control input-sm" 
        type="text" name="search" 
        placeholder="search term..."
        v-on:keyup.enter="doSearch"
        v-model="searchTerm"
/>
</template>