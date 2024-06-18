<template>
    <h1>Hello</h1>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script>
import { setBearerToken } from "./axios";
import echo from "./echo";
import { useToast } from "vue-toastification";
export default {
    data() {
        return {
            title: "Real-time Updates",
            message: "Waiting for updates...",
        };
    },
    // public channel
    // mounted() {
    //     const toast = useToast();
    //     echo.channel("notify-channel").listen("NotifyEvent", (e) => {
    //         this.message = e.data.message;
    //         toast.success(`New message: ${e.data.message}`);
    //     });
    // },
    // private channel
    mounted() {
        const toast = useToast();
        const userId = 1;
        const userToken = "2|uS2CAxmgUsurnTe561wEEBftN2W2guYf4bsGuHDf7cd370dc";
        setBearerToken(userToken);
        echo.private(`private-channel.${userId}`).listen(
            "PrivateEvent",
            (e) => {
                this.message = e.data.message;
                toast.success(`New message: ${e.data.message}`);
            }
        );
    },
};
</script>
