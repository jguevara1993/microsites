<div id="app">
        <media-modal v-if="showMediaManager" @media-modal-close="showMediaManager = false">
            <media-manager
                :is-modal="true"
                @media-modal-close="showMediaManager = false"
            >
            </media-manager>
        </media-modal>

        <button @click="showMediaManager = true">
            Show Media Manager
        </button>
    </div>

    <script>
        new Vue({
        el: '#app',
            data: {
                showMediaManager: false,
            }
        });
    </script>
