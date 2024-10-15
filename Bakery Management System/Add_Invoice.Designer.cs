namespace Bakery_Management_System
{
    partial class Add_Invoice
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Add_Invoice));
            this.bunifuGradientPanel1 = new ns1.BunifuGradientPanel();
            this.Bakery_Name_label = new ns1.BunifuCustomLabel();
            this.add_inv = new System.Windows.Forms.Button();
            this.cus_id_combo_box = new System.Windows.Forms.ComboBox();
            this.pro_id_combo_box = new System.Windows.Forms.ComboBox();
            this.label1 = new System.Windows.Forms.Label();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.sol_amount = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.bunifuCustomLabel4 = new ns1.BunifuCustomLabel();
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
            this.bunifuGradientPanel1.Size = new System.Drawing.Size(800, 88);
            this.bunifuGradientPanel1.TabIndex = 99;
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
            // add_inv
            // 
            this.add_inv.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_inv.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_inv.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_inv.Location = new System.Drawing.Point(162, 355);
            this.add_inv.Name = "add_inv";
            this.add_inv.Size = new System.Drawing.Size(518, 23);
            this.add_inv.TabIndex = 96;
            this.add_inv.Text = "OK";
            this.add_inv.UseVisualStyleBackColor = false;
            this.add_inv.Click += new System.EventHandler(this.add_inv_Click);
            // 
            // cus_id_combo_box
            // 
            this.cus_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.cus_id_combo_box.FormattingEnabled = true;
            this.cus_id_combo_box.Location = new System.Drawing.Point(307, 304);
            this.cus_id_combo_box.Name = "cus_id_combo_box";
            this.cus_id_combo_box.Size = new System.Drawing.Size(357, 21);
            this.cus_id_combo_box.TabIndex = 103;
            // 
            // pro_id_combo_box
            // 
            this.pro_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.pro_id_combo_box.FormattingEnabled = true;
            this.pro_id_combo_box.Location = new System.Drawing.Point(307, 262);
            this.pro_id_combo_box.Name = "pro_id_combo_box";
            this.pro_id_combo_box.Size = new System.Drawing.Size(357, 21);
            this.pro_id_combo_box.TabIndex = 101;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(162, 176);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(61, 22);
            this.label1.TabIndex = 98;
            this.label1.Text = "Invoice";
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
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(162, 218);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(75, 21);
            this.bunifuCustomLabel3.TabIndex = 97;
            this.bunifuCustomLabel3.Text = "Amount";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // sol_amount
            // 
            this.sol_amount.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.sol_amount.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.sol_amount.BackColor = System.Drawing.SystemColors.Control;
            this.sol_amount.BorderColor = System.Drawing.Color.SeaGreen;
            this.sol_amount.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.sol_amount.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.sol_amount.Location = new System.Drawing.Point(307, 218);
            this.sol_amount.Name = "sol_amount";
            this.sol_amount.Size = new System.Drawing.Size(355, 23);
            this.sol_amount.TabIndex = 95;
            // 
            // bunifuCustomLabel4
            // 
            this.bunifuCustomLabel4.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.bunifuCustomLabel4.AutoSize = true;
            this.bunifuCustomLabel4.BackColor = System.Drawing.Color.Transparent;
            this.bunifuCustomLabel4.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.bunifuCustomLabel4.Font = new System.Drawing.Font("Gabriela", 11.25F, System.Drawing.FontStyle.Bold);
            this.bunifuCustomLabel4.ImeMode = System.Windows.Forms.ImeMode.NoControl;
            this.bunifuCustomLabel4.Location = new System.Drawing.Point(162, 262);
            this.bunifuCustomLabel4.Name = "bunifuCustomLabel4";
            this.bunifuCustomLabel4.Size = new System.Drawing.Size(97, 21);
            this.bunifuCustomLabel4.TabIndex = 100;
            this.bunifuCustomLabel4.Text = "Product ID";
            this.bunifuCustomLabel4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(162, 304);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(110, 21);
            this.bunifuCustomLabel1.TabIndex = 102;
            this.bunifuCustomLabel1.Text = "Customer ID";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Add_Invoice
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.None;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.bunifuGradientPanel1);
            this.Controls.Add(this.add_inv);
            this.Controls.Add(this.cus_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.pro_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel4);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.sol_amount);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Add_Invoice";
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Add_Invoice";
            this.bunifuGradientPanel1.ResumeLayout(false);
            this.bunifuGradientPanel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private ns1.BunifuGradientPanel bunifuGradientPanel1;
        private ns1.BunifuCustomLabel Bakery_Name_label;
        private System.Windows.Forms.Button add_inv;
        private System.Windows.Forms.ComboBox cus_id_combo_box;
        private System.Windows.Forms.ComboBox pro_id_combo_box;
        private System.Windows.Forms.Label label1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox sol_amount;
        private ns1.BunifuCustomLabel bunifuCustomLabel4;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
    }
}