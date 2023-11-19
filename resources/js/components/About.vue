<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       this is about

                       <button class="btn btn-sm btn-success" @click="store.increment()">
                            From Store: {{ store.count }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { store } from '../store.js'
</script>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
