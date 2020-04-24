<template>
    <fj-base-container>
        <fj-base-header title="Bootstrap Elements" />

        <b-row>
            <b-col cols="6">
                <bootstrap-alert class="mb-4" />
                <bootstrap-jumbotron class="mb-4" />
                <bootstrap-list-group class="mb-4" />
                <bootstrap-modal class="mb-4" />
            </b-col>
            <b-col cols="6">
                <bootstrap-progress class="mb-4" />
                <bootstrap-buttons class="mb-4" />
                <bootstrap-media class="mb-4" />
            </b-col>
        </b-row>
    </fj-base-container>
</template>

<script>
export default {
    name: "Bootstrap"
};
</script>
