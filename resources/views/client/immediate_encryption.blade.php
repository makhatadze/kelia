@extends('layout.main')
@section('title', 'Chiffrage immédiat')
@section('scripts')
    <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
@section('additional-head')
    @include('panels/styles')
    <link rel="stylesheet" href="{{ asset(mix('fonts/font-awesome/css/font-awesome.min.css'))}}">
    <link rel='stylesheet' id='elementor-post-778-css'
          href='{{asset('css/defaults/custom_page/arrangement_attic.css')}}' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root {
            --root-green: #25737D;
            --root-yellow: #ffcd00;
        }

        .main-question-section {
            text-align: center;
            background-color: #fff;
            padding: 1em;
            width: 100%;
            border-radius: 0.5rem;
            border: 1px solid #d2d2d2;
            box-shadow: 2px 2px 10px #f5f5f5;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease-out;
        }

        .main-question-head {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 500ms;
            padding: 0.2rem 0;
        }

        .main-question-head:hover {
            background-color: #ececec;
            border-radius: 5px;
            transition: all 500ms;
        }

        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            word-break: break-all !important;
            margin: 0;
        }

        .line-clamp-single {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 100%;
        }

        .encr-button {
            width: initial;
            height: initial;
            background: var(--root-yellow) !important;
            border-radius: 0.4rem !important;
            color: #1a1a1a !important;
            padding: 0.2rem 2rem !important;

            border: none !important;
            outline: none !important;
            box-shadow: none !important;
        }

        .encr-button:hover {
            background: #BFA12B !important;
            color: white !important;
        }

        .encr-button:active {
            background: #796000 !important;
        }

        .bold {
            font-weight: bold;
        }

        ul {
            padding-left: 1em;
            line-height: 1.5em;
            list-style-type: none;
            cursor: pointer;
        }

        .root-tree {
            padding: 0;
        }

        .red-text {
            color: red;
        }

        .x {
            margin-top: 0.3rem;
            text-align: left;
        }

        .x:hover {
            background: #eaeaea;
            border-radius: 3px;
        }

        .close_icon {
            width: 2rem;
            height: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            transition: all 300ms;

            margin-left: 0.2rem;
        }

        .rotated {
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
        }

        .question-choice-container {
            position: relative;
            padding: 1rem;
            border-radius: 1rem;
            border: 1px solid #dcdcdc;
        }

        .question-choice {
        }

        .question-choice-toggle {
            position: absolute;
            right: -20px;
            top: -20px;
            padding: 1rem;
            border-radius: 50%;
            background-color: #ececec;
            width: 3rem;
            height: 3rem;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .question-choice-toggle:hover {
            background-color: #dcdcdc;
        }

        .question-choice-toggle:active {
            background-color: #bbbbbb;
        }

        .question-choice-answer-container {
        }

        .question-choice-answer {
            padding: 0.5rem;
            background-color: #ececec;
            border-radius: 1rem;
            color: black;
            text-align: center;
            cursor: pointer;
            border: 1px solid grey;

            max-height: 3.4rem;
            overflow: hidden;
            user-select: none;
        }

        .question-choice-answer:hover {
            background-color: #dcdcdc;
        }

        .question-choice-answer:active {
            background-color: #bbbbbb;
        }

        .loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            display: inline-block;
            width: 25px;
            height: 25px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .modal-mask {
            position: fixed;
            z-index: 9998;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: table;
            transition: opacity 1s ease-in-out;
        }

        .modal-wrapper {
            display: table-cell;
            vertical-align: middle;
        }

        .modal-container {
            width: 600px;
            margin: 0px auto;
            padding: 5px 5px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
            transition: all 0.3s ease;
            font-family: Helvetica, Arial, sans-serif;
            text-align: center;
        }

        .modal-header h3 {
            margin-top: 0;
            color: #42b983;
        }

        .modal-body {
            margin: 25px 0;
        }

        .modal-default-button {
            float: right;
        }

        /*
         * The following styles are auto-applied to elements with
         * transition="modal" when their visibility is toggled
         * by Vue.js.
         *
         * You can easily play with the modal transition by editing
         * these styles.
         */

        .modal-enter {
            opacity: 0;
        }

        .modal-leave-active {
            opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .red-border {
            border: 1px solid red !important;
        }
    </style>
@endsection

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

    {{-- Content --}}
    <div class="d-flex justify-content-center my-5" style="min-height: 60%">
        <div style="width: 1200px" class="mt-5" id="app">
            <router-view></router-view>
        </div>
    </div>

    <script type="text/x-template" id="tree">
        <li>
            <div :class="{bold: isFolder}" @click="toggle">
                <div class="x" @click="handleClick(model)">
                    @{{model.body}}
                    <span v-if="isFolder">
                        <i data-feather='chevron-right' v-if="open"></i>
                        <i data-feather='chevron-down' v-else></i>
                    </span>
                </div>
            </div>
            <ul v-show="open" v-if="isFolder">
                <tree class="item"
                      v-for="(model, i) in model.children"
                      v-bind:key="i + Math.random()"
                      :model="model">
                </tree>
            </ul>
        </li>
    </script>
    <script type="text/x-template" id="item">
        <div class="main-question-section accordion">
            <div class="main-question-head" @click="toggle()">
                <p class="line-clamp">
                    @{{ title }}
                </p>

                <div class="close_icon">
                    <template v-if="open">
                        @include('components.svgs.chevron_down')
                    </template>
                    <template v-else>
                        @include('components.svgs.chevron_right')
                    </template>
                </div>
            </div>

            <div class="main-question-panel" v-if="open">
                <ul class="root-tree mt-1" v-if="children && children.length">
                    <template v-for="tree in children">
                        <tree class="item" :model="tree"></tree>
                    </template>
                </ul>
            </div>
        </div>
    </script>
    <script type="text/x-template" id="content-main">
        <div>
            <template v-for="(rootParent, i) in sections">
                <div v-bind:key="rootParent.body + i" class="mt-3">
                    <h1>
                        @{{ rootParent.body }}
                    </h1>

                    <div class="row" v-if="rootParent.children && rootParent.children.length">
                        <div v-for="(child, i) in rootParent.children" v-bind:key="child.body + i" class="col-3 mt-2">
                            <item :title="child.body" :children="child.children"></item>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </script>
    <script type="text/x-template" id="content-item">
        <div>
            <h1>Chiffrez vos travaux</h1>
            <div class="row" v-if="questions && questions.length">
                <div class="col-12" v-for="(question, index) in questions">
                    <div class="question-choice-container mt-2">
                        <div class="question-choice-toggle" @click="toggleQuestion(index)">
                            <template v-if="question.toggled">
                                @include('components.svgs.chevron_right')
                            </template>
                            <template v-else>
                                @include('components.svgs.chevron_down')
                            </template>
                        </div>

                        <div class="question-choice">
                            @{{ question.body }}


                            <a @click="showModal(question)" style="margin-left: 15px; cursor: pointer; color: #cc7800">
                                <i class="fa fa-lightbulb-o" ></i>
                                infos
                            </a>
                            <span class="ml-4" v-if="question.answer_value">
                                - @{{ question.answer_value }}
                            </span>
                        </div>

                        <div class="question-choice-answer-container pt-2" v-if="!question.toggled">
                            <div class="row" v-if="question.type !== 1">
                                <template v-if="question.type === 2">
                                    <div class="col-2 mb-3">
                                        <input type="number" min="0.1" step="0.1" placeholder="meter" v-model="state.length.value" :class="{'red-border': state.length.error}">
                                    </div>
                                </template>
                                <template v-if="question.type === 3">
                                    <div class="col-2 mb-3">
                                        <input type="number" min="0.1" step="0.1" placeholder="m2" v-model="state.length.value" :class="{'red-border': state.length.error}">
                                    </div>
                                </template>
                                <template v-if="question.type === 4">
                                    <div class="col-2 mb-3">
                                        <input type="number" min="0.1" step="0.1" placeholder="length" v-model="state.length.value" :class="{'red-border': state.length.error}">
                                    </div>
                                    <div class="col-2 mb-3" >
                                        <input type="number" id="form-name" placeholder="width" v-model="state.width.value" :class="{'red-border': state.width.error}">
                                    </div>
                                </template>
                                <template v-if="question.type === 5">
                                    <div class="col-2 mb-3">
                                        <input type="number" min="0.1" step="0.1" placeholder="m3" v-model="state.length.value" :class="{'red-border': state.length.error}">
                                    </div>
                                </template>
                                <template v-if="question.type === 6">
                                    <div class="col-2 mb-3">
                                        <input type="number" min="0.1" step="0.1" placeholder="length" v-model="state.length.value" :class="{'red-border': state.length.error}">
                                    </div>
                                    <div class="col-2 mb-3" >
                                        <input type="number" id="form-name" placeholder="width" v-model="state.width.value" :class="{'red-border': state.width.error}">
                                    </div>
                                    <div class="col-2 mb-3" >
                                        <input type="number" id="form-name" placeholder="height" v-model="state.height.value" :class="{'red-border': state.height.error}">
                                    </div>
                                </template>
                            </div>


                            <div class="row" v-if="question.answers && question.answers.length">
                                <template v-for="answer in question.answers">
                                    <div class="col-2">
                                        <div class="question-choice-answer" @click="handleAnswerClick(question, answer, index)">
                                            @{{ answer.body }}
                                        </div>

                                        <template v-if="answer.image_src">
                                            <img
                                                v-bind:src="answer.image_src"
                                                alt=""
                                                style="width: 100%;height: auto;margin-top: 1rem;border: 3px solid black;border-radius: 3px">
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-2" v-if="finished && answers.length">
                    <hr style="background-color: var(--root-green)">
                    <div class="d-flex align-items-center">
                        <p style="color: var(--root-green)" class="m-0">
                            Prix étape1 : @{{ totalPrice }} $
                        </p>

                        <button class="encr-button ms-2" v-on:click="gotToForm()">
                            Next
                        </button>
                    </div>
                </div>
            </div>


            <transition name="modal" v-if="modal.show" :class="modal.show ? 'modal-active': 'modal-not-active'">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                        <div class="modal-container">
                            <div class="modal-body">
                                <img v-if="modal.image" :src="modal.image" />
                                <div name="body">
                                    @{{ modal.description }}
                                </div>
                            </div>

                            <div class="modal-footer">
                                <slot name="footer">
                                    <a @click="closeModal" class="modal-default-button">
                                        close
                                    </a>
                                </slot>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </script>

    <script type="text/x-template" id="user-form">
        <div>
            <h1>Veuillez remplir un formulaire</h1>

            <div class="row">
                <div class="col-12 mt-1">
                    <label for="form-name">Name<span class="red-text">*</span></label>
                    <input type="text" id="form-name" placeholder="enter name" v-model="user.name">
                </div>

                <div class="col-12 mt-1">
                    <label for="form-mail">Mail<span class="red-text">*</span></label>
                    <input type="email" id="form-mail" placeholder="enter mail" v-model="user.mail">
                </div>

                <div class="col-12 mt-1">
                    <label for="form-city">City<span class="red-text">*</span></label>
                    <input type="text" id="form-city" placeholder="enter city" v-model="user.city">
                </div>

                <div class="col-12 mt-1">
                    <label for="form-address">Address<span class="red-text">*</span></label>
                    <input type="text" id="form-address" placeholder="enter address" v-model="user.address">
                </div>

                <div class="col-12 mt-1">
                    <label for="form-postal-code">Postal code<span class="red-text">*</span></label>
                    <input type="text" id="form-postal-code" placeholder="enter postal-code" v-model="user.postalCode">
                </div>

                <div class="col-12 mt-1">
                    <label for="form-number">Phone number</label>
                    <input type="tel" id="form-number" placeholder="enter number" v-model="user.phoneNumber">
                </div>

                <div class="col-12 mt-2" v-if="errorMessages && errorMessages.length">
                    <div style="border: 1px solid red;padding: 1rem;border-radius: 1rem">
                        <div v-for="(error, i) in errorMessages" class="red-text">
                            @{{ error }}
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button class="encr-button" @click="goBack()">
                        go back
                    </button>

                    <button class="encr-button" @click="downloadOrSendPdf(consts.downloadPDF)" v-bind:disabled="loadingDownload">
                        donwload pdf

                        <span class="loader" v-if="loadingDownload"></span>
                    </button>

                    <button class="encr-button" @click="downloadOrSendPdf(consts.sendPDFToMail)" v-bind:disabled="loadingSend">
                        send pdf to mail

                        <span class="loader" v-if="loadingSend"></span>
                    </button>
                </div>
            </div>
        </div>
    </script>

    <script>
        Vue.component('tree', {
            template: `#tree`,
            props: {
                model: Object
            },
            data: function () {
                return {
                    open: false
                }
            },
            computed: {
                isFolder: function () {
                    return this.model.children && this.model.children.length;
                }
            },
            methods: {
                toggle: function () {
                    if (this.isFolder) {
                        this.open = !this.open
                    }
                },
                handleClick: function (data) {
                    if (data.children && data.children.length) {
                        return;
                    }

                    const id = data?.id;

                    if (id) {
                        this.$router.push({name: 'item', params: {id}});
                    }
                }
            }
        });
        Vue.component('item', {
            template: `#item`,
            props: {
                title: String,
                children: [Array, null]
            },
            data: function () {
                return {
                    open: false
                }
            },
            methods: {
                toggle: function () {
                    this.open = !this.open;
                }
            }
        });

        const Main = Vue.component('content-main', {
            template: `#content-main`,
            data: function () {
                return {
                    sections: []
                }
            },
            created() {
                this.fetchSections();
            },
            methods: {
                hello() {
                    alert('hello');
                },
                fetchSections() {
                    return fetch('{{route('api_sections')}}')
                        .then(response => response.json())
                        .then(data => this.sections = data)
                        .catch(err => console.log(err));
                }
            }
        });
        const Item = Vue.component('content-item', {
            template: `#content-item`,
            data: function () {
                return {
                    id: null,
                    data: null,
                    index: 0,
                    finished: false,
                    totalPrice: 0,
                    questions: [],
                    answers: [],
                    priceTotal: [],
                    modal: {
                        show: false,
                        description: '',
                        image: ''
                    },
                    state: {
                        length: {
                            value: '',
                            error: false
                        },
                        width: {
                            value: '',
                            error: false
                        },
                        height: {
                            value: '',
                            error: false
                        }
                    }
                }
            },
            created() {
                this.id = this.$route.params?.id;
                this.fetchItemQuestionsAndAnswers(this.id);
            },
            methods: {
                fetchItemQuestionsAndAnswers(id) {
                    return fetch('{{route('api_sections_questions')}}', {
                        method: "POST",
                        headers: {'Content-Type': 'application/json'},
                        body: JSON.stringify({id})
                    })
                        .then(response => response.json())
                        .then(data => this.data = data.map((el, i) => {
                            el.toggled = i !== 0;
                            el.chosen = null;
                            return el;
                        }))
                        .then(data => {
                            this.questions.push(data[0]);
                        })
                        .catch(err => console.log(err));
                },

                handleAnswerClick(question, answer, i) {
                    let validationData = this.validate(answer, question.type);
                    if(validationData) {
                        this.answers.push(validationData)
                        this.questions[i].answer_value = validationData.description;

                        let nextQuestion = this.data.find( ({ id }) => id === answer.next_question_id )
                        if(nextQuestion) {
                            nextQuestion.toggled = false;
                            this.questions.push(nextQuestion)
                        }
                        question.toggled = !question.toggled;


                        this.totalPrice += validationData.total;

                        if (!this.questions[i + 1]) {
                            this.finished = true
                        }
                    }
                },
                validate(answer, type){
                    let data = undefined;
                    switch (type) {
                        case 1:
                            data = {
                                id: answer.question_id,
                                answer_id: answer.id,
                                body: answer.body,
                                size: null,
                                price: answer.price,
                                total: 0,
                                description: `${answer.body}`
                            }
                            break;
                        case 2:
                            if(!this.state.length.value) {
                                this.state.length.error = true
                            } else {
                                let size = parseFloat(this.state.length.value);
                                let price = parseFloat(answer.price);
                                let total = size * price
                                data = {
                                    id: answer.question_id,
                                    answer_id: answer.id,
                                    body: answer.body,
                                    size: size,
                                    price: answer.price,
                                    total: total,
                                    description: `${answer.body} -> ${size}meter/${total}$`
                                }
                                this.clearState();
                            }
                            break;
                        case 3:
                            if(!this.state.length.value) {
                                this.state.length.error = true
                            } else {
                                let size = parseFloat(this.state.length.value);
                                let price = parseFloat(answer.price);
                                let total = size * price
                                data = {
                                    id: answer.question_id,
                                    answer_id: answer.id,
                                    body: answer.body,
                                    size: size,
                                    price: answer.price,
                                    total: total,
                                    description: `${answer.body} -> ${size}M2/${total}$`
                                }
                                this.clearState();
                            }
                            break;
                        case 4:
                            if(!this.state.length.value || !this.state.width.value) {
                                if(!this.state.length.value) {
                                    this.state.length.error = true
                                }
                                if(!this.state.width.value) {
                                    this.state.width.error = true
                                }
                            } else {
                                let size = parseFloat(this.state.length.value) * parseFloat(this.state.width.value);
                                let price = parseFloat(answer.price);
                                let total = size * price
                                data = {
                                    id: answer.question_id,
                                    answer_id: answer.id,
                                    body: answer.body,
                                    size: size,
                                    price: answer.price,
                                    total: total,
                                    description: `${answer.body} -> ${size}M2/${total}$`
                                }
                                this.clearState();
                            }
                            break;
                        case 5:
                            if(!this.state.length.value) {
                                this.state.length.error = true
                            } else {
                                let size = parseFloat(this.state.length.value);
                                let price = parseFloat(answer.price);
                                let total = size * price
                                data = {
                                    id: answer.question_id,
                                    answer_id: answer.id,
                                    body: answer.body,
                                    size: size,
                                    price: answer.price,
                                    total: total,
                                    description: `${answer.body} -> ${size}M3/${total}$`
                                }
                                this.clearState();
                            }
                            break;
                        case 6:
                            if(!this.state.length.value || !this.state.width.value || !this.state.height.value) {
                                if(!this.state.length.value) {
                                    this.state.length.error = true
                                }
                                if(!this.state.width.value) {
                                    this.state.width.error = true
                                }
                                if(!this.state.height.value) {
                                    this.state.height.error = true
                                }
                            } else {
                                let size = parseFloat(this.state.length.value) * parseFloat(this.state.width.value) * parseFloat(this.state.height.value);
                                let price = parseFloat(answer.price);
                                let total = size * price
                                data = {
                                    id: answer.question_id,
                                    answer_id: answer.id,
                                    body: answer.body,
                                    size: size,
                                    price: answer.price,
                                    total: total,
                                    description: `${answer.body} -> ${size}M3/${total}$`
                                }
                                this.clearState();
                            }
                            break;
                        default:
                            break
                    }

                    return data
                },
                clearState() {
                    this.state = {
                        length: {
                            value: '',
                            error: false
                        },
                        width: {
                            value: '',
                            error: false
                        },
                        height: {
                            value: '',
                            error: false
                        }
                    }
                },
                showModal(question) {
                    this.modal = {
                        show: true,
                        description: question.description,
                        image: question.image_src
                    }
                },
                closeModal() {
                    this.modal = {
                        show: false,
                        description: '',
                        image: ''
                    }
                },
                gotToForm() {
                    this.$router.push({
                        name: 'userform', params: {
                            id: this.id,
                            answers: this.answers,
                        }
                    });
                },
                toggleQuestion(index) {
                    if(!this.questions[index].toggled) {
                        this.questions[index].toggled = true;
                    } else {
                        let questions = this.questions
                        let answers = this.answers
                        this.questions = questions.filter(function(value, i){
                            return i <= index;
                        });
                        this.answers = answers.filter(function(value, i){
                            return i < index;
                        });
                        this.questions[index].toggled = false
                        this.questions[index].answer_value = ''
                        let total = 0;

                        if(this.answers.length) {
                            this.answers.forEach((el) => {
                                total += el.total
                            })
                        }
                        this.total = total;
                        this.finished = false
                    }
                }
            }
        });
        const UserForm = Vue.component('user-form', {
            template: `#user-form`,
            data: function () {
                return {
                    consts: {
                        downloadPDF: 1,
                        sendPDFToMail: 2,
                    },
                    errorMessages: [],
                    answers: [],
                    total: 0,
                    id: null,
                    user: {
                        name: null,
                        mail: null,
                        city: null,
                        address: null,
                        postalCode: null,
                        phoneNumber: null
                    },
                    errorKeys: {
                        name: 'name is required',
                        mail: 'mail is required',
                        city: 'city is required',
                        address: 'address is required',
                        postalCode: 'postal code is required',
                    },
                    loadingDownload:false,
                    loadingSend:false
                }
            },
            created() {
                if (!this.$route.params?.answers || this.$route.params?.answers?.length === 0) {
                    this.goBack();
                }

                this.answers = this.$route.params?.answers;
                this.id = this.$route.params?.id;
            },
            methods: {
                goBack() {
                    this.$router.push({name: 'item', params: {id: this.$route.params?.id}});
                },

                download(body) {
                    return fetch(
                        '{{route('downloadOrSendPdf')}}',
                        {method: "POST", headers: {'Content-Type': 'application/json'}, body}
                    )
                        .then(res => res.json())
                        .then(resp => {
                            const link = document.createElement('a');
                            link.href = resp.url;
                            link.setAttribute('download', 'chiffrage.pdf');
                            document.body.appendChild(link);
                            link.click();

                            // show success
                            this.showMessageBox();
                        });
                },
                send(body) {
                    return fetch(
                        '{{route('downloadOrSendPdf')}}',
                        {method: "POST", headers: {'Content-Type': 'application/json'}, body}
                    )
                        .then(res => res.json())
                        .then(() => {
                            // show success
                            this.showMessageBox();
                        });
                },

                showMessageBox() {
                },
                showErrors() {
                },
                redirectToHome() {
                    window.location.href = '{{route('main')}}'
                },

                validate() {
                    Object.keys(this.user).forEach(k => {
                        if (this.user[k] === null && this.errorKeys[k]) {
                            this.errorMessages.push(this.errorKeys[k]);
                        }
                    })
                },
                clearMessages() {
                    this.errorMessages = [];
                },
                errorsPresent() {
                    return this.errorMessages.length > 0
                },

                downloadOrSendPdf(type) {
                    this.clearMessages();
                    this.validate();

                    if (this.errorsPresent()) {
                        return;
                    }

                    const body = JSON.stringify({type, userForm: this.user, answers: this.answers})

                    if (type === this.consts.downloadPDF) {
                        this.loadingDownload = true;

                        this.download(body)
                            .catch(err => console.dir(err))
                            .finally(() => {
                                this.loadingDownload = false
                                this.redirectToHome();
                            });
                    }

                    if (type === this.consts.sendPDFToMail) {
                        this.loadingSend = true;

                        this.send(body)
                            .catch(err => console.dir(err))
                            .finally(() => {
                                this.loadingSend = false;
                                this.redirectToHome();
                            });
                    }
                }
            }
        });

        const router = new VueRouter({
            mode: 'history', //removes # from url
            base: '/immediate',
            routes: [
                {path: '/', component: Main, name: 'main'},
                {path: '/:id', component: Item, name: 'item'},
                {path: '/:id/userform', component: UserForm, name: 'userform'},
            ]
        });

        const app = new Vue({
            el: '#app',
            router,
        });
    </script>
@endsection
