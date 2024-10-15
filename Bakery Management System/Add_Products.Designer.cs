namespace Bakery_Management_System
{
    partial class Add_Products
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Add_Products));
            this.bunifuGradientPanel1 = new ns1.BunifuGradientPanel();
            this.Bakery_Name_label = new ns1.BunifuCustomLabel();
            this.cat_id_combo_box = new System.Windows.Forms.ComboBox();
            this.bunifuCustomLabel4 = new ns1.BunifuCustomLabel();
            this.label1 = new System.Windows.Forms.Label();
            this.bunifuCustomLabel3 = new ns1.BunifuCustomLabel();
            this.pro_name = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
            this.add_pro = new System.Windows.Forms.Button();
            this.pro_stock = new WindowsFormsControlLibrary1.BunifuCustomTextbox();
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
            this.bunifuGradientPanel1.TabIndex = 79;
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
            // cat_id_combo_box
            // 
            this.cat_id_combo_box.BackColor = System.Drawing.SystemColors.Control;
            this.cat_id_combo_box.FormattingEnabled = true;
            this.cat_id_combo_box.Location = new System.Drawing.Point(331, 251);
            this.cat_id_combo_box.Name = "cat_id_combo_box";
            this.cat_id_combo_box.Size = new System.Drawing.Size(357, 21);
            this.cat_id_combo_box.TabIndex = 83;
            this.cat_id_combo_box.SelectedIndexChanged += new System.EventHandler(this.cat_id_combo_box_SelectedIndexChanged);
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
            this.bunifuCustomLabel4.Location = new System.Drawing.Point(170, 251);
            this.bunifuCustomLabel4.Name = "bunifuCustomLabel4";
            this.bunifuCustomLabel4.Size = new System.Drawing.Size(107, 21);
            this.bunifuCustomLabel4.TabIndex = 81;
            this.bunifuCustomLabel4.Text = "Category ID";
            this.bunifuCustomLabel4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.label1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F);
            this.label1.Location = new System.Drawing.Point(170, 133);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(74, 22);
            this.label1.TabIndex = 78;
            this.label1.Text = "Products";
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
            this.bunifuCustomLabel3.Location = new System.Drawing.Point(170, 175);
            this.bunifuCustomLabel3.Name = "bunifuCustomLabel3";
            this.bunifuCustomLabel3.Size = new System.Drawing.Size(58, 21);
            this.bunifuCustomLabel3.TabIndex = 77;
            this.bunifuCustomLabel3.Text = "Name";
            this.bunifuCustomLabel3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // pro_name
            // 
            this.pro_name.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.pro_name.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.HistoryList;
            this.pro_name.BackColor = System.Drawing.SystemColors.Control;
            this.pro_name.BorderColor = System.Drawing.Color.SeaGreen;
            this.pro_name.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.pro_name.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.pro_name.Location = new System.Drawing.Point(331, 175);
            this.pro_name.Name = "pro_name";
            this.pro_name.Size = new System.Drawing.Size(355, 23);
            this.pro_name.TabIndex = 71;
            // 
            // add_pro
            // 
            this.add_pro.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.add_pro.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.add_pro.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.add_pro.Location = new System.Drawing.Point(170, 312);
            this.add_pro.Name = "add_pro";
            this.add_pro.Size = new System.Drawing.Size(518, 23);
            this.add_pro.TabIndex = 74;
            this.add_pro.Text = "OK";
            this.add_pro.UseVisualStyleBackColor = false;
            this.add_pro.Click += new System.EventHandler(this.add_pro_Click);
            // 
            // pro_stock
            // 
            this.pro_stock.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.pro_stock.BackColor = System.Drawing.SystemColors.Control;
            this.pro_stock.BorderColor = System.Drawing.Color.SeaGreen;
            this.pro_stock.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.pro_stock.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F);
            this.pro_stock.Location = new System.Drawing.Point(331, 214);
            this.pro_stock.Name = "pro_stock";
            this.pro_stock.Size = new System.Drawing.Size(355, 23);
            this.pro_stock.TabIndex = 72;
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
            this.bunifuCustomLabel1.Location = new System.Drawing.Point(170, 214);
            this.bunifuCustomLabel1.Name = "bunifuCustomLabel1";
            this.bunifuCustomLabel1.Size = new System.Drawing.Size(56, 21);
            this.bunifuCustomLabel1.TabIndex = 75;
            this.bunifuCustomLabel1.Text = "Stock";
            this.bunifuCustomLabel1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Add_Products
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 362);
            this.Controls.Add(this.bunifuGradientPanel1);
            this.Controls.Add(this.cat_id_combo_box);
            this.Controls.Add(this.bunifuCustomLabel4);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.bunifuCustomLabel3);
            this.Controls.Add(this.pro_name);
            this.Controls.Add(this.bunifuCustomLabel1);
            this.Controls.Add(this.pro_stock);
            this.Controls.Add(this.add_pro);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Add_Products";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Add_Products";
            this.bunifuGradientPanel1.ResumeLayout(false);
            this.bunifuGradientPanel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private ns1.BunifuGradientPanel bunifuGradientPanel1;
        private ns1.BunifuCustomLabel Bakery_Name_label;
        private System.Windows.Forms.ComboBox cat_id_combo_box;
        private ns1.BunifuCustomLabel bunifuCustomLabel4;
        private System.Windows.Forms.Label label1;
        private ns1.BunifuCustomLabel bunifuCustomLabel3;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox pro_name;
        private System.Windows.Forms.Button add_pro;
        public WindowsFormsControlLibrary1.BunifuCustomTextbox pro_stock;
        private ns1.BunifuCustomLabel bunifuCustomLabel1;
    }
}