document.getElementById('tracerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Mengambil data dari form
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const status = document.getElementById('status').value;
    const skills = document.getElementById('skills').value;

    // Membuat objek data
    const data = {
        name: name,
        email: email,
        status: status,
        skills: skills
    };

    // Menampilkan hasil
    document.getElementById('result').innerHTML = `
        <h2>Data Alumni</h2>
        <p><strong>Nama:</strong> ${data.name}</p>
        <p><strong>Email:</strong> ${data.email}</p>
        <p><strong>Status Pekerjaan:</strong> ${data.status}</p>
        <p><strong>Keterampilan yang Diperoleh:</strong> ${data.skills}</p>
    `;

    // Reset form
    document.getElementById('tracerForm').reset();
});