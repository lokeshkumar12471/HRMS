<x-guest-layout>
    <!-- Widget Item -->
    <div class="widget-area-2 proclinic-box-shadow">
        <h3 class="widget-title">Patient Message</h3>
        <label for="doctor_name">Doctor_Name</label>
        <div class="form-group col-md-6">
            <select class="form-control" id="doctor-name" name="doctor_id">
                @foreach ($doctor as $doctors)
                    <option value="{{ $doctors->id }}">{{ $doctors->doctor_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="patient-name">Message</label>
            <input type="text" name="message" placeholder="Message To Doctor" class="form-control" id="patient-name">
        </div>
        <div class="form-group col-md-6 mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Message</button>
        </div>
    </div>
</x-guest-layout>
