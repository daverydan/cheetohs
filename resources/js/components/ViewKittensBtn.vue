<template>
    <div>
        <button
            v-if="!fetched"
            @click="fetchKittens"
            :disabled="loading"
            type="button"
            class="bg-gold text-white text-xl px-5 py-2 font-bold hover:bg-opacity-80 transition duration-200 ease-in-out"
        >
            View Kittens
            <i v-if="loading" class="ml-1 fas fa-sync fa-spin opacity-40"></i>
        </button>

        <div
            v-if="pics.length"
            :id="`kitten-pics-${id}`"
            style="background: rgba(149, 108, 52, 0.2)"
            class="mt-3 flex flex-wrap flex-col sm:flex-row rounded-md p-2"
        >
            <div
                v-for="pic in pics"
                :key="pic.id"
                :id="`pic-${pic.id}`"
                class="w-full sm:w-1/2 md:w-1/4 overflow-hidden aspect-w-1 aspect-h-1 p-2 relative"
            >
                <img
                    :src="`/litters/${pic.imageable_id}/${pic.image}`"
                    class="w-full h-full object-center object-cover group-hover:opacity-75 rounded-md"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["id", "loggedin"],

    data() {
        return {
            fetched: false,
            loading: false,
            pics: [],
        };
    },

    methods: {
        fetchKittens() {
            if (!this.fetched) {
                this.fetched = true;
                this.loading = true;
                axios
                    .get(`/litter-pics/${this.id}`)
                    .then(({ data }) => {
                        this.loading = false;
                        this.pics = data.pics;
                    })
                    .catch((e) => {
                        console.log(e);
                    });
            }
        },
    },
};
</script>
