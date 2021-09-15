<div class="message error"><?php echo flash_message('error_message')?></div>
<div class="message success"><?php echo flash_message('success_message')?></div>

<!-- PROFILE START -->
<div class="profile" style="margin-top: 1rem;">
  <!-- PROFILE DETAIL START -->
  <div class="card">
    <div class="row">
      <div class="full lg-half">
        <div class="row text center lg-start">
          <div class="full lg-fit">
            <img src="./images/logo.jpeg" alt="">
          </div>
          <div class="full lg-auto">
            <h3 class="profile-name" style="margin-bottom: 1rem;"><?php echo @$profile->name ?? '-' ?></h3>
            <p class="profile-role text muted"><?php echo @$profile->role ?? '-' ?></p>
            <div style="margin: 1rem 0;">
              <a href="#" class="button blue" style="margin-right: .5rem;">Kontak</a>
              <a href="#" class="button green outline">Resume</a>
            </div>
          </div>
        </div>
      </div>
      <div class="full lg-half">
        <table>
          <tbody>
            <tr>
              <td width="130px">Availability</td>
              <td class="profile-availability text muted"><?php echo @$profile->availability ?? '-' ?></td>
            </tr>
            <tr>
              <td>Usia</td>
              <td class="profile-age text muted"><?php echo @$profile->age ?? '-' ?></td>
            </tr>
            <tr>
              <td>Lokasi</td>
              <td class="profile-location text muted"><?php echo @$profile->location ?? '-' ?></td>
            </tr>
            <tr>
              <td>Pengalaman</td>
              <td class="profile-experience text muted"><?php echo @$profile->experience ?? '-' ?> Tahun</td>
            </tr>
            <tr>
              <td>Email</td>
              <td class="profile-email text muted"><?php echo @$profile->email ?? '-' ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- PROFILE DETAIL END -->

  <!-- FORM START -->
  <div class="card">
    <form action="/" id="profile-edit" method="POST">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?php echo @$profile->id ?? null ?>">
      <input type="hidden" name="user_id" value="<?php echo @$profile->user_id ?? null ?>">
      <div>
        <label for="name">Nama</label>
        <input type="text" name="name" value="<?php echo @$profile->name ?? '-' ?>" required id="name">
      </div>
      <div>
        <label for="role">Role</label>
        <input type="text" name="role" value="<?php echo @$profile->role ?? '-' ?>" required id="role">
      </div>
      <div>
        <label for="availability">Availability</label>
        <input type="text" name="availability" value="<?php echo @$profile->availability ?? '-' ?>" required id="availability">
      </div>
      <div>
        <label for="age">Age</label>
        <input type="number" name="age" value="<?php echo @$profile->age ?? '-' ?>" required id="age">
      </div>
      <div>
        <label for="location">Lokasi</label>
        <input type="text" name="location" value="<?php echo @$profile->location ?? '-' ?>" required id="location">
      </div>
      <div>
        <label for="experience">Year's Experience</label>
        <input type="number" name="experience" value="<?php echo @$profile->experience ?? '-' ?>" required id="experience">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php echo @$profile->email ?? '-' ?>" required id="email">
      </div>
      <div>
        <button type="submit" class="uppercase button green block">submit</button>
      </div>
    </form>
  </div>
  <!-- FORM END -->
</div>
<!-- PROFILE END -->