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
            class="mt-3 flex flex-wrap flex-col sm:flex-row justify-center rounded-md p-2"
        >
            <div
                v-for="pic in pics"
                :key="pic.id"
                :id="`pic-${pic.id}`"
                class="w-full sm:w-1/2 md:w-1/4 overflow-hidden p-2 relative"
            >
                <img
                    :src="`/litters/${pic.imageable_id}/${pic.image}`"
                    class="w-full h-full object-center object-cover group-hover:opacity-75 rounded-md"
                />
                <a
                    v-if="loggedin"
                    @click.prevent="deletePic(pic.id)"
                    href="#"
                    class="bg-red-600 hover:bg-red-700 z-50 text-white absolute w-8 h-8 rounded-full flex justify-center items-center"
                    style="border: 3px solid #eae1d6; right: -2px; top: -2px"
                >
                    <i class="fa fa-times"></i>
                </a>
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
                        alert("An error occurred");
                        console.log(e);
                    });
            }
        },
        deletePic(picId) {
            axios
                .delete(`/image/${picId}`)
                .then(() => {
                    this.pics.splice(
                        this.pics.findIndex(function (i) {
                            return i.id === picId;
                        }),
                        1
                    );
                })
                .catch((e) => {
                    alert("An error occurred");
                    console.log(e);
                });
        },
    },
};
</script>
