<section>
<h2>Добави пациент</h2>
<form method="post" action="#">
    <div class="fields">
        <div class="field half">
            <input type="text" name="first_name" id="name" placeholder="Име" />
        </div>

        <div class="field half">
            <input type="text" name="last_name" id="name" placeholder="Фамилия" />
        </div>

        <div class="field half">
            <input type="email" name="email" id="email" placeholder="Email" />
        </div>

        <div class="field half">
            <input type="text" name="phone_number" id="phone_number" placeholder="Телефонен номер" />
        </div>

        <div class="field">
            <textarea name="description" id="description" placeholder="Досие"></textarea>
        </div>
    </div>
    <ul class="actions">
        <li><input type="submit" value="Добави" class="primary" /></li>
    </ul>
</form>
</section>