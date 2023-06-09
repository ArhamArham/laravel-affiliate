<!-- BEGIN: CSS Assets-->
<link rel="stylesheet" href="{{ mix('dist/css/app.css') }}"/>
<style>
    @media (min-width: 768px) {
        .md\:w-1\/2 {
            width: 25%;
        }

        .md\:w-1\/3 {
            width: 33.333333%;
        }

        .md\:w-1\/4 {
            width: 50%;
        }

        .md\:w-1\/5 {
            width: 75%;
        }
    }

    .dark .filepond--panel-root {
        border-color: transparent;
        --tw-bg-opacity: 1;
        background-color: rgb(var(--color-darkmode-800) / var(--tw-bg-opacity));
        transition-property: none;
    }

    .dark .vs__selected {
        border-color: transparent;
        --tw-bg-opacity: 1;
        background-color: rgb(var(--color-darkmode-800) / var(--tw-bg-opacity));
        transition-property: none;
        color: inherit;
    }

    .dark .vs__dropdown-menu {
        border-color: transparent;
        --tw-bg-opacity: 1;
        background: rgb(var(--color-darkmode-800) / var(--tw-bg-opacity));
        transition-property: none;
        color: inherit;
    }

    .dark .vs__dropdown-option--disabled {
        background: #212b4491;
        color: inherit;
    }

    .vs--searchable .vs__dropdown-toggle {
        height: 38px !important;
        border-radius: 0.375rem !important;
    }

    .vs--error .vs__dropdown-toggle {
        --tw-border-opacity: 1;
        border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
    }

    .dark .vs__dropdown-toggle {
        border-color: transparent;
        --tw-bg-opacity: 1;
        background: rgb(var(--color-darkmode-800) / var(--tw-bg-opacity));
        transition-property: none;
        color: inherit;
    }


    .dark .vs__search {
        border-color: transparent !important;
    }

    .dark .vs__dropdown-option {
        color: inherit;
    }

    .capitalize {
        text-transform: capitalize;
    }
</style>
{{--<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">--}}
<!-- END: CSS Assets-->
