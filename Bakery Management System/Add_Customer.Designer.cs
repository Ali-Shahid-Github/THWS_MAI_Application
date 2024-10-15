namespace Bakery_Management_System
{
    partial class Add_Customer
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Add_Customer));
            this.bunifuGradientPanel1 = new ns1.BunifuGradientPanel();
            this.Bakery_Name_label = new ns1.BunifuCustomLabel();
            this.label1 = new System.Windows.Forms.Label();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.cus_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel2 = new ns1.BunifuCustomLabel();
            this.cus_contact = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.add_cus = new System.Windows.Forms.Button();
            this.cus_location = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel1 = new ns1.BunifuCustomLabel();
            this.bunifuGradientPanel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // bunifuGradientPanel1
            // 
            this.bunifuGradientPanel1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("bunifuGradientPanel1.BackgroundImage")));
            this.bunifuGradientPanel1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.bunifuGradientPanel1.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.bunifuGradientPanel1.Controls.Add(this.Bakery_Name_label);
            this.bunifuGradientPanel1.Dock = System.Windows.Forms.DockStyle.Top;
            this.bunifuGradientPanel1.GradientBottomLeft = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.GradientBottomRight = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.bunifuGradientPanel1.GradientTopLeft = System.Drawing.Color.Honeydew;
            this.bunifuGradientPanel1.GradientTopRight = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.bunifuGradientPanel1.Location = new System.Drawing.Point(0, 0);
            this.bunifuGradientPanel1.Name = "bunifuGradientPanel1";
            this.bunifuGradientPanel1.Quality = 50;
            this.bunifuGradientPanel1.Size = new System.Drawing.Size(739, 88);
            this.bunifuGradientPanel1.TabIndex = 43;
            // 
            // Bakery_Name_label
            // 
            this.Bakery_Name_label.AutoSize = true;
            this.Bakery_Name_label.BackColor = System.Drawing.Color.Transparent;
            this.Bakery_Name_label.Font = new System.Drawing.Font("Monotype Corsiva", 26.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))));
            this.Bakery_Name_label.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.Bakery_Name_label.Location = new System.Drawing.Point(3, 7);
            this.Bakery_Name_label.Name = "Bakery_Name_label";
            this.Bakery_Name_label.Size = new System.Drawing.Size(185, 43);
            this.Bakery_Name_label.TabIndex = 0;
            this.Bakery_Name_label.Text = "ABC Bakery";
            this.Bakery_Name_label.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(163, 137);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(80, 22);
            this.label1.TabIndex = 42;
            this.label1.Text = "Customer";
            // 
            // bunifuCustomLabel3
            // 
            this.bunifuCustomLabel3.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel3.AutoSize = true;
            this.bunifuCustomLabel3.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel3.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel3.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(163, 179);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel3.TabIndex = 41;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // cus_name
            // 
            this.cus_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.cus_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.cus_name.BackColor = System.Drawing.SystemColors.Control;
            this.cus_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.cus_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.cus_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.cus_name.Location = new System.Drawing.Point(288, 179);
            this.cus_name.Name = "cus_name";
            this.cus_name.Size = new System.Drawing.Size(355, 23);
            this.cus_name.TabIndex = 17;
            // 
            // bunifuCustomLabel2
            // 
            this.bunifuCustomLabel2.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel2.AutoSize = true;
            this.bunifuCustomLabel2.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel2.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel2.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel2.Location = new System.Drawing.Point(163, 253);
            this.bunifuCustomLabel2.Name = "bunifuCustomLabel2";
            this.bunifuCustomLabel2.Size = new System.Drawing.Size(73, 21);
            this.bunifuCustomLabel2.TabIndex = 39;
            this.bunifuCustomLabel2.Text = "Contact";
            this.bunifuCustomLabel2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // cus_contact
            // 
            this.cus_contact.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.cus_contact.BackColor = System.Drawing.SystemColors.Control;
            this.cus_contact.BorderColor = System.Drawing.Color.SeaGreen;
            this.cus_contact.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.cus_contact.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.cus_contact.Location = new System.Drawing.Point(288, 253);
            this.cus_contact.Name = "cus_contact";
            this.cus_contact.Size = new System.Drawing.Size(355, 23);
            this.cus_contact.TabIndex = 19;
            // 
            // add_cus
            // 
            this.add_cus.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_cus.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_cus.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_cus.Location = new System.Drawing.Point(163, 292);
            this.add_cus.Name = "add_cus";
            this.add_cus.Size = new System.Drawing.Size(480, 23);
            this.add_cus.TabIndex = 20;
            this.add_cus.Text = "OK";
            this.add_cus.UseVisualStyleBackColor = false;
            this.add_cus.Click += new System.EventHandler(this.add_cus_Click);
            // 
            // cus_location
            // 
            this.cus_location.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.cus_location.BackColor = System.Drawing.SystemColors.Control;
            this.cus_location.BorderColor = System.Drawing.Color.SeaGreen;
            this.cus_location.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.cus_location.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.cus_location.Location = new System.Drawing.Point(288, 219);
            this.cus_location.Name = "cus_location";
            this.cus_location.Size = new System.Drawing.Size(355, 23);
            this.cus_location.TabIndex = 18;
            // 
            // bunifuCustomLabel1
            // 
            this.bunifuCustomLabel1.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel1.AutoSize = true;
            this.bunifuCustomLabel1.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel1.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel1.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(163, 219);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(82, 21);
            this.bunifuCustomLabel1.TabIndex = 39;
            this.bunifuCustomLabel1.Text = "Location";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Add_Customer
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(739, 328);
            this.Controls.Add(this.bunifuGradientPanel1);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.cus_name);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.cus_location);
            this.Controls.Add(this.bunifuCustomLabel2);
            this.Controls.Add(this.cus_contact);
            this.Controls.Add(this.add_cus);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Add_Customer";
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Add_Customer";
            this.bunifuGradientPanel1.ResumeLayout(false);
            this.bunifuGradientPanel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private ns1.BunifuGradientPanel bunifuGradientPanel1;
        private ns1.BunifuCustomLabel Bakery_Name_label;
        private System.Windows.Forms.Label label1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox cus_name;
        private ns1.BunifuCustomLabel bunifuCustomLabel2;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox cus_contact;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox cus_location;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
        private System.Windows.Forms.Button add_cus;
    }
}