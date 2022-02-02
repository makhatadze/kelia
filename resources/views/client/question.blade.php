<script type="text/x-template" id="content-item">
    <div>
        <h1>Chiffrez vos travaux</h1>

        <div class="row" v-if="data && data.length">
            <div class="col-12" v-for="(question, index) in data">
                <div class="question-choice-container mt-2">
                    <div class="question-choice-toggle" @click="question.toggled = !question.toggled">
                        <template v-if="question.toggled">
                            @include('components.svgs.chevron_right')
                        </template>
                        <template v-else>
                            @include('components.svgs.chevron_down')
                        </template>
                    </div>

                    <div class="question-choice">
                        @{{ question.body }}
                    </div>

                    <div class="question-choice-answer-container pt-2" v-if="!question.toggled">
                        <div class="row" v-if="question.answers && question.answers.length">
                            <template v-for="answer in question.answers">
                                <div class="col-2">
                                    <div class="question-choice-answer" @click="handleAnswerClick(question, answer, index)">
                                        @{{ answer.body }}
                                    </div>

                                    <template v-if="answer.img_path">
                                        <img
                                                v-bind:src="answer.img_path"
                                                alt=""
                                                style="width: 100%;height: auto;margin-top: 1rem;border: 3px solid black;border-radius: 3px">
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2" v-if="finished">
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
    </div>
</script>
