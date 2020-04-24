<template>
    <b-card title="Buttons">
        <h6>Solid color variants</h6>
        <div class="mb-4">
            <b-button variant="primary">Primary</b-button>
            <b-button variant="secondary">Secondary</b-button>
            <b-button variant="success">Success</b-button>
            <b-button variant="danger">Danger</b-button>
            <b-button variant="warning">Warning</b-button>
            <b-button variant="info">Info</b-button>
            <b-button variant="light">Light</b-button>
            <b-button variant="dark">Dark</b-button>
        </div>

        <h6>Outline color variants</h6>
        <div class="mb-4">
            <b-button variant="outline-primary">Primary</b-button>
            <b-button variant="outline-secondary">Secondary</b-button>
            <b-button variant="outline-success">Success</b-button>
            <b-button variant="outline-danger">Danger</b-button>
            <b-button variant="outline-warning">Warning</b-button>
            <b-button variant="outline-info">Info</b-button>
            <b-button variant="outline-light">Light</b-button>
            <b-button variant="outline-dark">Dark</b-button>
        </div>

        <h6>Link variant</h6>
        <div class="mb-4">
            <b-button variant="link">Link</b-button>
        </div>

        <h6>Sizing</h6>
        <div class="mb-4">
            <b-button size="sm">Small Button</b-button>
            <b-button>Default Button</b-button>
            <b-button size="lg">Large Button</b-button>
        </div>

        <h6>Squared</h6>
        <div class="mb-4">
            <b-button squared>Button</b-button>
            <b-button squared variant="primary">Button</b-button>
            <b-button squared variant="outline-secondary">Button</b-button>
            <b-button squared variant="success">Button</b-button>
            <b-button squared variant="outline-danger">Button</b-button>
            <b-button squared variant="info">Button</b-button>
        </div>

        <h6>Disabled</h6>
        <div class="mb-4">
            <b-button disabled size="lg" variant="primary">Disabled</b-button>
            <b-button disabled size="lg">Also Disabled</b-button>
        </div>

        <h6>Button group with dropdown menue</h6>
        <div class="mb-4">
            <b-button-group>
                <b-button>Button</b-button>
                <b-dropdown right text="Menu">
                    <b-dropdown-item>Item 1</b-dropdown-item>
                    <b-dropdown-item>Item 2</b-dropdown-item>
                    <b-dropdown-divider></b-dropdown-divider>
                    <b-dropdown-item>Item 3</b-dropdown-item>
                </b-dropdown>
                <b-dropdown right split text="Split Menu">
                    <b-dropdown-item>Item 1</b-dropdown-item>
                    <b-dropdown-item>Item 2</b-dropdown-item>
                    <b-dropdown-divider></b-dropdown-divider>
                    <b-dropdown-item>Item 3</b-dropdown-item>
                </b-dropdown>
            </b-button-group>
        </div>
    </b-card>
</template>

<script>
export default {
    name: "BootstrapButtons"
};
</script>
