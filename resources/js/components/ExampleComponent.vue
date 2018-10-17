<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component <small>by Vuejs</small> </div>

                    <div class="card-body">
                        Email: {{user.email}} <br>
                        Name: {{user.name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: [],
            }
        },
        mounted() {
            console.log('Component mounted.');

            axios.get('/api/user')
                .then(response => {
                    this.user = response.data;
                }).catch(err => {
                    console.log(err);
                });
        }
    }
</script>
