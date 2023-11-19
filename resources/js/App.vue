<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" >
                 <router-link to="/">Home</router-link>  
                </a>
                <a class="navbar-brand">
                    <router-link to="/about">Go to about</router-link>  
                </a>
                
                        
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Md. Shamim Miah
                                </a>

                            </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
         
        <router-view>
        </router-view>
        
    </div>
      
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
 