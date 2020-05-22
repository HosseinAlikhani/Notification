<template>
    <div id="app1">
        <a href="#" class="notification">
                    <span style="color: darkgreen   ">
                        <i class="fa fa-bell fa-2x"></i>
                    </span>
            <span class="badge"> {{ notify::count() }} </span>
        </a>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                message: '',
            }
        },
        created() {
            Echo.private('user.' + window.Laravel.user)
                .listen('NotificationEvent', (e) => {
                    console.log(e);
                    this.message = e.notification.count;
                });
        }
    };

    // export default {
    //     data () {
    //         return {
    //             count: 'fuck',
    //         }
    //     },
    //     created(){},
    //     methods(){}
    // }


</script>
