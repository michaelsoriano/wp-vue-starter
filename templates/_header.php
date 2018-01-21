<template id="header">
        <header>      
            <div class="container-fluid top-nav">
                <div class="container">
                <div class="row">
                <nav class="nav">
                    <router-link class="nav-link" v-bind:to="{path:'/'}" >Home</router-link>
                    <router-link class="nav-link" v-bind:to="{path:'/blog/',name:'blog'}" >Blog</router-link>
                    <router-link class="nav-link" 
                        v-for="(page, key, index) in pages" 
                        v-bind:to="{ name: 'page', params: { slug: page.slug }}"
                        v-bind:key="key">
                            {{page.title.rendered}}
                    </router-link>
                </nav>
                </div>
                </div>
            </div>
            <div class="container-fluid main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <router-link class="blogname" to="/">{{this.$root.bloginfo.name}}</router-link>
                            <p>{{this.$root.bloginfo.description}}</p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2 search-wrapper">
                            <search-form></search-form>
                        </div>
                    </div> 
                </div>
            </div>             
        </header>
</template>