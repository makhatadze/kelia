// noinspection JSUnresolvedVariable, JSUnresolvedFunction, ES6ConvertVarToLetConst, JSUnusedLocalSymbols, DuplicatedCode,UnnecessaryLocalVariableJS

(function () {
    'use strict';

    document.addEventListener("DOMContentLoaded", function (event) {
        const form = document.getElementById('project-form');
        const editors = {};
        const editorAndInputs = [
            {
                quill: 'full-container-geo',
                quillInput: 'quill-form-input-geo'
            },
            {
                quill: 'full-container-eng',
                quillInput: 'quill-form-input-eng'
            },
            // {
            //     quill: 'full-container-rus',
            //     quillInput: 'quill-form-input-rus'
            // },
        ];

        const Font = Quill.import('formats/font');
        Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
        Quill.register(Font, true);
        Quill.register('modules/imageCompress', ImageCompressor)
        Quill.register('modules/imageResize', ImageResize);

        // create quills
        editorAndInputs.forEach(el => {
            // Full Editor
            const fullEditor = new Quill(`#${el.quill}`, {
                bounds: `#${el.quill} .editor`,
                modules: {
                    formula: true,
                    syntax: true,
                    imageCompress: {
                        quality: 0.7, // default
                        maxWidth: 1000, // default
                        maxHeight: 1000, // default
                        imageType: 'image/jpeg', // default
                        debug: true, // default
                        suppressErrorLogging: false, // default
                    },
                    imageResize: {
                        modules: ['Resize', 'DisplaySize', 'Toolbar'],
                        toolbarStyles: {
                            backgroundColor: 'black',
                            border: 'none',
                            color: 'white'
                        },
                    },
                    toolbar: [
                        [{font: []}, {size: []}],
                        ['bold', 'italic', 'underline', 'strike'],
                        [{script: 'super'}, {script: 'sub'}],
                        [{header: '1'}, {header: '2'}, 'blockquote', 'code-block'],
                        [{list: 'ordered'}, {list: 'bullet'}, {indent: '-1'}, {indent: '+1'}],
                        ['direction', {align: []}],
                        ['link', 'image'],
                        ['omega']
                    ]
                },
                theme: 'snow'
            });

            editors[el.quill] = fullEditor;

            const editor = document.getElementById(el.quill);
            var customButton = document.querySelector('.ql-omega');

            customButton.addEventListener('click', function () {
                if (editor.style.position !== 'fixed') {
                    editor.style.cssText = 'position: fixed;background: #fff;height: 100vh;width: 100vw;top: 0;left: 0;z-index: 10000 !important;';
                } else {
                    editor.style.cssText = '';
                }
            });
        })

        // copy quil content to form inputs (hidden)
        form.onsubmit = function () {
            editorAndInputs.forEach(el => {
                const editor = editors[el.quill]
                const quillHiddenInput = document.getElementById(el.quillInput);
                quillHiddenInput.value = JSON.stringify(editor.getContents());
            });
        };
    });
})();





