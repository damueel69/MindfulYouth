
    <style>
        body {
            background-image: url('<?= base_url('assets/images/bg-diary.jpg') ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
        }

        .logo {
            display: block;
            margin: 0 auto;
            margin-top: -50px;
            width: 200px;
        }

        .card-header {
            text-align: center;
        }

        .diary-entry {
            margin-bottom: 20px;
        }

        .add-entry-form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Mental Fitness Diary</h3>
                    </div>
                    <div class="text-center add-entry-form">
                            <h4>Add New Entry</h4>
                            <form action="#" method="POST" class="my-4">
                                <div class="form-group">
                                    <label for="entry_date">Entry Date</label>
                                    <input type="date" name="entry_date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mood">Mood</label>
                                    <br>
                                    <select name="mood" class="form-control" required>
                                        <option value="happy">Happy</option>
                                        <option value="stressed">Stressed</option>
                                        <!-- Tambahkan opsi mood lainnya sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="activities">Activities</label>
                                    br
                                    <input type="text" name="activities" class="form-control" placeholder="Enter activities"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="reflection">Reflection</label>
                                    <textarea name="reflection" class="form-control" placeholder="Enter reflection"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Entry</button>
                            </form>
                        </div>
                    <div class="card-body">
                        <br><br><br>
                        <div class="diary-entry">
                            <h5>Entry Date: January 1, 2023</h5>
                            <p>Today's Mood: <strong>Happy</strong></p>
                            <p>Activities: <em>Meditation, Yoga, Reading</em></p>
                            <p>Reflection: It was a great day. I focused on mindfulness and felt a sense of calmness.</p>
                        </div>
                        <div class="diary-entry">
                            <h5>Entry Date: January 2, 2023</h5>
                            <p>Today's Mood: <strong>Stressed</strong></p>
                            <p>Activities: <em>Deep Breathing, Listening to Music</em></p>
                            <p>Reflection: Had a challenging day at work. Practiced deep breathing to manage stress.</p>
                        </div>
                        <!-- Add more diary entries as needed -->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
