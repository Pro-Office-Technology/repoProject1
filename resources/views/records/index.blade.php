@extends('layouts.app')

@section('title', 'Index Field')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Record Type</h6>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <span class="font-weight-bold" style="font-size: 24px; color: black;">Record Type</span>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="file" name="pdf_file" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary">Upload</button>
                        <button type="button" class="btn btn-success">View</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered" id="indexFieldTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Choose Index Field to Use</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="indexFieldRow">
                                <td>
                                    <select class="form-control indexField">
                                        <option value="" disabled selected>Please choose index field to use</option>
                                        <option value="Name">Name</option>
                                        <option value="Date">Date</option>
                                    </select>
                                    <div class="additionalFields" style="display: none;">
                                        <input type="text" class="form-control additionalInput" placeholder="Enter additional information">
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary addButton">Add</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function showAdditionalField() {
        var selectedOption = this.value;
        var additionalFields = this.parentNode.querySelector('.additionalFields');
        var additionalInput = additionalFields.querySelector('.additionalInput');

        if (selectedOption === 'Name' || selectedOption === 'Date') {
            additionalFields.style.display = 'block';
            additionalInput.placeholder = selectedOption === 'Name' ? 'Enter name' : 'Enter date';
        } else {
            additionalFields.style.display = 'none';
            additionalInput.placeholder = '';
        }
    }


    function addDropdown() {
        var newRow = document.createElement('tr');
        newRow.innerHTML = document.querySelector('.indexFieldRow').innerHTML;
        document.getElementById('indexFieldTable').appendChild(newRow);


        var newSelect = newRow.querySelector('.indexField');
        var newButton = newRow.querySelector('.addButton');
        newSelect.addEventListener('change', showAdditionalField);
        newButton.addEventListener('click', addDropdown);


        this.style.display = 'none';
    }


    document.querySelector('.indexField').addEventListener('change', showAdditionalField);
    document.querySelector('.addButton').addEventListener('click', addDropdown);
</script>
