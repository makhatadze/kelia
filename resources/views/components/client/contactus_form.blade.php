<form id="wpforms-form-1217"
      class="wpforms-validate wpforms-form wpforms-ajax-form"
      method="post"
      enctype="multipart/form-data"
      action="{{route('contactus_store')}}">
    @csrf

    <div class="wpforms-field-container">
        <div id="wpforms-1217-field_1-container"
             class="wpforms-field wpforms-field-name"
             data-field-id="1">
            <label class="wpforms-field-label" for="wpforms-1217-field_1">
                Nom
                <span class="wpforms-required-label">*</span>
            </label>

            <input
                type="text"
                id="wpforms-1217-field_1"
                class="wpforms-field-large wpforms-field-required"
                name="name"
                placeholder="Votre nom"
                required>
        </div>

        <div id="wpforms-1217-field_2-container"
             class="wpforms-field wpforms-field-email"
             data-field-id="2">
            <label
                class="wpforms-field-label"
                for="wpforms-1217-field_2">
                Email

                <span class="wpforms-required-label">*</span>
            </label>

            <input
                type="email"
                id="wpforms-1217-field_2"
                class="wpforms-field-large wpforms-field-required"
                name="email"
                placeholder="Votre adresse mail"
                required>
        </div>

        <div id="wpforms-1217-field_3-container"
             class="wpforms-field wpforms-field-date-time"
             data-field-id="3">
            <label
                class="wpforms-field-label"
                for="wpforms-1217-field_3">
                Date/ Heure
                <span class="wpforms-required-label">*</span>
            </label>

            <div class="wpforms-field-row wpforms-field-large">
                <div class="wpforms-field-row-block wpforms-one-half wpforms-first">
                    <div class="wpforms-datepicker-wrap">
                        <input
                            type="text"
                            id="wpforms-1217-field_3"
                            class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-required"
                            data-date-format="d/m/Y"
                            data-input="true"
                            name="date"
                            placeholder="Date"
                            required>

                        <a
                            title="Clear Date"
                            data-clear
                            class="wpforms-datepicker-clear"
                            style="display:none;">
                        </a>
                    </div>

                    <label for="wpforms-1217-field_3" class="wpforms-field-sublabel after wpforms-sublabel-hide">
                        Date
                    </label>
                </div>

                <div class="wpforms-field-row-block wpforms-one-half">
                    <input type="text"
                           id="wpforms-1217-field_3-time"
                           class="wpforms-field-date-time-time wpforms-timepicker wpforms-field-required"
                           data-rule-time24h="true"
                           data-time-format="H:i"
                           data-step="30"
                           name="time"
                           placeholder="Heure"
                           required>

                    <label for="wpforms-1217-field_3-time" class="wpforms-field-sublabel after wpforms-sublabel-hide">
                        Time
                    </label>
                </div>
            </div>
        </div>

        <div id="wpforms-1217-field_4-container"
             class="wpforms-field wpforms-field-phone"
             data-field-id="4">
            <label class="wpforms-field-label" for="wpforms-1217-field_4">
                Téléphone

                <span class="wpforms-required-label">*</span>
            </label>

            <input id="wpforms-1217-field_4"
                   type="tel"
                   name="mobile"
                   placeholder="Votre numéro de téléphone"
                   required>
        </div>

        <div id="wpforms-1217-field_5-container" class="wpforms-field wpforms-field-textarea" data-field-id="5">
            <label
                class="wpforms-field-label"
                for="wpforms-1217-field_5">
                Message
            </label>

            <textarea
                id="wpforms-1217-field_5"
                class="wpforms-field-small"
                name="message"
                placeholder="Un commentaire ?">
            </textarea>
        </div>
    </div>

    <button type="submit">Envoyer</button>
</form>

{{--    <div class="wpforms-submit-container">--}}
{{--        <button type="submit" class="wpforms-submit call__back-button">--}}
{{--            Envoyer--}}
{{--        </button>--}}
{{--    </div>--}}
{{--<div id="wpforms-1217-field_4-container"--}}
{{--class="wpforms-field wpforms-field-phone"--}}
{{--data-field-id="4"><label--}}
{{--class="wpforms-field-label"--}}
{{--for="wpforms-1217-field_4">Téléphone--}}
{{--<span--}}
{{--class="wpforms-required-label">*</span></label><input--}}
{{--type="tel" id="wpforms-1217-field_4"--}}
{{--class="wpforms-field-large wpforms-field-required wpforms-smart-phone-field"--}}
{{--data-rule-smart-phone-field="true"--}}
{{--name="wpforms[fields][4]"--}}
{{--placeholder="Votre numéro de téléphone"--}}
{{--required>--}}
{{-- </div> --}}
