<template>
    <div class="">

        <!-- banner -->
        <section class="bg-white py-5 mt-5">
            <div class="w-11/12 mx-auto">
                <div class="h-20 flex justify-center items-center bg-gray-200">
                    <p>Responsive ad</p>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="w-11/12 mx-auto">
                <div class="flex flex-wrap md:flex-nowrap ">
                    <!-- posts -->
                    <div class="grid md:gap-3 gap-5 mb-5 md:w-2/3">
                        <div class="">
                            <!--                            news from database-->
                            <h3 class="text-2xl font-bold">News From Database</h3>
                            <div class="grid gap-y-3">
                                <div v-for="(category,key) in categories" class="">
                                    <h2 class="text-xl">{{ category.nom}}</h2>
                                    <div class="grid gap-3 md:grid-cols-2">
                                        <div v-for="(post ,key) in category.articles " class="bg-white relative py-3 px-4">
                                            <div class="h-36 ">
                                                <img class="w-full h-full object-cover" :src="post.img" alt="">
                                            </div>
                                            <span :style="{background : cat.color}" v-for="(cat,k) in post.categories" class=" absolute top-5 left-5 text-white py-1 px-2 rounded text-sm">{{cat.nom}}</span>
                                            <div class="">
                                                <p class="text-xl font-bold"><a :href="post.url"> {{ post.title }}</a></p>
                                                <p class="text-xs text-gray-400 py-2">
<!--                                                    <span><i class="fa fa-user text-pink-600 mr-1"></i>{{post.user.pseudo }}</span>-->
                                                    <span><i class="far fa-clock"></i>{{ post.created_at }}</span>
                                                </p>
                                                <p class="text-gray-500 mb-3">{{ post.description }}</p>
                                                <a href="" class="py-1 px-3 bg-black text-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- aside -->
                    <div class="w-full md:w-1/3 md:ml-2">
                        <!--                        social plugins-->
                        <div class="py-2 px-4 bg-white">
                            <h3 class="text-xl font-semibold py-2">Social Plugin</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="bg-blue-900 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-blue-800 flex justify-center items-center">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Facebook</p>
                                    </div>
                                </div>
                                <div class="bg-blue-400 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-blue-300 flex justify-center items-center">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Twitter</p>
                                    </div>
                                </div>
                                <div class="bg-yellow-500 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-yellow-400 flex justify-center items-center">
                                            <i class="fas fa-rss"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Rss</p>
                                    </div>
                                </div>
                                <div class="bg-red-700 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-red-600 flex justify-center items-center">
                                            <i class="fab fa-pinterest"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Pinterest</p>
                                    </div>
                                </div>
                                <div class="text-white bg-gradient-to-tr from-red-600 to-blue-500">
                                    <div class="flex">
                                        <div class="h-10 w-10 flex justify-center items-center">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Instagram</p>
                                    </div>
                                </div>
                                <div class="bg-blue-600 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-blue-500 flex justify-center items-center">
                                            <i class="fab fa-vk"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">VKontakte</p>
                                    </div>
                                </div>
                                <div class="bg-red-600 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-red-500 flex justify-center items-center">
                                            <i class="fab fa-youtube"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">YouTube</p>
                                    </div>
                                </div>
                                <div class="bg-yellow-400 text-white">
                                    <div class="flex">
                                        <div class="h-10 w-10 bg-yellow-300 flex justify-center items-center">
                                            <i class="fab fa-snapchat"></i>
                                        </div>
                                        <p class="flex justify-center items-center ml-2 font-bold">Snapchat</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="">
                            <div class="py-2 px-4 bg-white my-5">
                                <h3 class="text-xl mb-3 font-semibold">Subscribe Us</h3>
                                <div class="h-32">
                                    <video class="h-full w-full" src="https://www.youtube.com/watch?v=DxcJbrs6rKk"></video>
                                </div>
                            </div>
                            <!--                            ad-->
                            <div class="py-4 px-4 bg-white mb-5">
                                <h3 class="text-xl mb-3 font-semibold">Ad Space</h3>
                                <div class="border border-gray-400 h-60 bg-gray-200 flex items-center justify-center">
                                    <p class="text-gray-400">responsive ad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscriber form -->
    </div>
</template>

<script>
    import axios from 'axios'
    export default {

        name: "Category",
        data : function () {
            return {
                categories : []
            }
        },
        mounted() {
            axios.get('/admin/api/categories')
                .then(response => {
                    this.categories = response.data["hydra:member"]
                    console.log(response.data["hydra:member"])
                })
                .catch(error => console.log(error))
        }
    }
</script>

<style scoped>

</style>