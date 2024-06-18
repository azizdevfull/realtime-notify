<template>
    <h1>Hello</h1>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script>
import echo from "./echo";

export default {
    data() {
        return {
            title: "Real-time Updates",
            message: "Waiting for updates...",
        };
    },
    mounted() {
        echo.channel("notify-channel").listen("NotifyEvent", (e) => {
            this.message = e.data.message;
        });
    },
};
</script>
