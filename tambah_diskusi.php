<?php include 'includes/header.php'; ?>
<div class="row">
  <?php include 'includes/sidebar.php'; ?>
  <div class=" mt-4 col-9 m-auto">
    <form action="kursus" method="POST">
      <h4 class="text-center">Hai {{nama user}} apa yang ingin kamu tanyakan</h4>

      <div class="mb-3 ">
        <label for="judul_kursus">Apa yang kamu ingin tanyakan </label>
        <input type="text" class="form-control" id="judul_kursus" name="judul_kursus" required>
      </div>

      <div class="mb-3">
        <label for="">Kategori</label>
        <select class="form-select" id="" aria-label="Default select example" name="">
          <option value="" disabled selected>Select</option>
          <!-- @foreach ($guru as $item) -->
          <option value="{{ $item->id }}">data komentar</option>
          <!-- @endforeach -->
        </select>
      </div>
      <div class="mb-3">
        <textarea name="komentar" id="komentar" cols="30" rows="10" class="form-control">
          <!-- ini di dalam kita berikan kir -->
        </textarea>
      </div>



      <div class="mb-3">
        <button type="submit" class="btn btn-dark">save</button>
      </div>

    </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>