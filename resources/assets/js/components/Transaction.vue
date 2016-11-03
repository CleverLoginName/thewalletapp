<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an new component!
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
                console.log(response);
              }, (response) => {
                console.log(response);
              });
        }
    }
</script>
