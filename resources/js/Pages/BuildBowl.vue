<template>
    <div class="container mx-auto border-solid my-10">
        <h1 class="text-center text-blue-600 my-5 text-5xl">Build The Bowl</h1>
        <div>
            <div class=" mx-auto max-w-sm rounded overflow-hidden shadow-lg text-center" @click="getChoices('fish')">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Add Fish</div>
                    <div>{{ choice.fish }}</div>
                </div>

            </div>
            <div class=" mx-auto max-w-sm rounded overflow-hidden shadow-lg text-center my-5" @click="getChoices('vegetables')">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Add Vegetables</div>
                    <div>{{ choice.vegetables }}</div>
                </div>
            </div>
            <div class=" mx-auto max-w-sm rounded overflow-hidden shadow-lg text-center my-5" @click="getChoices('sauce')">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Add Sauce</div>
                    <div>{{ choice.sauce }}</div>
                </div>
            </div>
            <div class=" mx-auto max-w-sm rounded overflow-hidden shadow-lg text-center my-5">
                <div class="px-6 py-4">
                    <div v-for="item in items" :key="item.message" class="mb-5">
                        <div class="col-start-2 col-span-4 ..." >{{ item.message }}</div>
                        <div class="col-start-1 col-end-3 ...">
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l"
                                    @click="add(item.message)">
                                +
                            </button>
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r"
                                    @click="remove">
                                -
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 text-gray-700 text-center py-2 m-2">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r text-center">
                    Submit Poke Bowl
                </button>
            </div>

        </div>
    </div>

</template>

<script>
    import Sidebar from './Sidebar'

    export default {
        components: {
            Sidebar,
        },
        data: function () {
            return {
                items: [
                ],
                choice: {'fish': '', 'vegetables': '', 'sauce': '' },
                pickingFrom: ''
            }
        },
        methods: {
            getChoices : function(category){
                axios.get('/').then((response) => {
                    console.log(response.data);
                });
                this.pickingFrom = category;
                switch(category) {
                    case 'fish':
                        this.items = [
                            { message: 'Salmon' },
                            { message: 'Tuna' }
                        ];
                        break;
                    case 'vegetables':
                        this.items = [
                            { message: 'Cucumber' },
                            { message: 'Avocado' }
                        ]
                        break;
                    case 'sauce':
                        this.items = [
                            { message: 'Mayo' },
                            { message: 'Mango' }
                        ]
                        break;
                    default:
                        return false;
                }
            },
            add: function(ingredient){
                this.choice[this.pickingFrom.toLowerCase()] = ingredient;
            },
            remove: function(category, ingredient){
                this.choice[this.pickingFrom.toLowerCase()] = '';
            }
        }
    }
</script>
