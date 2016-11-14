<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    <input v-model="search" @keydown="searchFor">
                    <div class="panel-body">
                        <ul>
                            <li v-for="transaction in transactions">{{ transaction.name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    var Vue = require('vue');
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    export default {
        mounted() {
              this.$http.get('api/transactions').then((response) => {
                this.transactions = response.data;//console.log(transactions);
              }, (response) => {
               this.transactions = response.data;//console.log(transactions);
              });
        },
    data:function(){
        return {transactions:[],search:''}
        },
        methods:{
            searchFor:function(){

            }
        }
    }
</script>
