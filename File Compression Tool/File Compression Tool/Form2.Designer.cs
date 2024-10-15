namespace File_Compression_Tool
{
    partial class Form2
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form2));
            this.BrowseButton = new JThinButton.JThinButton();
            this.CompressButton1 = new JThinButton.JThinButton();
            this.panel3 = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.BackButton1 = new JThinButton.JThinButton();
            this.textBox1 = new System.Windows.Forms.TextBox();
            this.panel1 = new System.Windows.Forms.Panel();
            this.Button2 = new JThinButton.JThinButton();
            this.buttons3 = new JThinButton.JThinButton();
            this.progressBar1 = new System.Windows.Forms.ProgressBar();
            this.label2 = new System.Windows.Forms.Label();
            this.panel3.SuspendLayout();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // BrowseButton
            // 
            this.BrowseButton.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.BrowseButton.BackColor = System.Drawing.Color.Transparent;
            this.BrowseButton.BackgroundColor = System.Drawing.Color.Black;
            this.BrowseButton.BorderColor = System.Drawing.Color.White;
            this.BrowseButton.BorderRadius = 4;
            this.BrowseButton.ButtonText = "Browse";
            this.BrowseButton.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BrowseButton.Font = new System.Drawing.Font("Verdana", 10F, System.Drawing.FontStyle.Bold);
            this.BrowseButton.Font_Size = new System.Drawing.Font("Verdana", 10F, System.Drawing.FontStyle.Bold);
            this.BrowseButton.ForeColors = System.Drawing.Color.White;
            this.BrowseButton.HoverBackground = System.Drawing.Color.White;
            this.BrowseButton.HoverBorder = System.Drawing.Color.Empty;
            this.BrowseButton.HoverFontColor = System.Drawing.Color.Black;
            this.BrowseButton.LineThickness = 1;
            this.BrowseButton.Location = new System.Drawing.Point(495, 126);
            this.BrowseButton.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.BrowseButton.Name = "BrowseButton";
            this.BrowseButton.Size = new System.Drawing.Size(81, 29);
            this.BrowseButton.TabIndex = 5;
            this.BrowseButton.Click += new System.EventHandler(this.BrowseButton_Click);
            // 
            // CompressButton1
            // 
            this.CompressButton1.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.CompressButton1.BackColor = System.Drawing.Color.Transparent;
            this.CompressButton1.BackgroundColor = System.Drawing.Color.Black;
            this.CompressButton1.BorderColor = System.Drawing.Color.White;
            this.CompressButton1.BorderRadius = 8;
            this.CompressButton1.ButtonText = "Compress";
            this.CompressButton1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.CompressButton1.Font = new System.Drawing.Font("Microsoft YaHei UI", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CompressButton1.Font_Size = new System.Drawing.Font("Microsoft YaHei UI", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.CompressButton1.ForeColors = System.Drawing.Color.White;
            this.CompressButton1.HoverBackground = System.Drawing.Color.White;
            this.CompressButton1.HoverBorder = System.Drawing.Color.Empty;
            this.CompressButton1.HoverFontColor = System.Drawing.Color.Black;
            this.CompressButton1.LineThickness = 2;
            this.CompressButton1.Location = new System.Drawing.Point(252, 211);
            this.CompressButton1.Margin = new System.Windows.Forms.Padding(5, 4, 5, 4);
            this.CompressButton1.Name = "CompressButton1";
            this.CompressButton1.Size = new System.Drawing.Size(138, 45);
            this.CompressButton1.TabIndex = 7;
            this.CompressButton1.Click += new System.EventHandler(this.CompressButton1_Click);
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.Black;
            this.panel3.Controls.Add(this.label1);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel3.ForeColor = System.Drawing.Color.White;
            this.panel3.Location = new System.Drawing.Point(0, 318);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(611, 31);
            this.panel3.TabIndex = 8;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(3, 6);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(420, 16);
            this.label1.TabIndex = 4;
            this.label1.Text = "Note: The file will be saved at the location of the orignal file.";
            // 
            // label3
            // 
            this.label3.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)));
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 34F);
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(153, 35);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(446, 53);
            this.label3.TabIndex = 9;
            this.label3.Text = "File Compression Tool ";
            // 
            // BackButton1
            // 
            this.BackButton1.BackColor = System.Drawing.Color.Transparent;
            this.BackButton1.BackgroundColor = System.Drawing.Color.Black;
            this.BackButton1.BorderColor = System.Drawing.Color.White;
            this.BackButton1.BorderRadius = 0;
            this.BackButton1.ButtonText = "Back";
            this.BackButton1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BackButton1.Font = new System.Drawing.Font("Verdana", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BackButton1.Font_Size = new System.Drawing.Font("Verdana", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BackButton1.ForeColors = System.Drawing.Color.White;
            this.BackButton1.HoverBackground = System.Drawing.Color.White;
            this.BackButton1.HoverBorder = System.Drawing.Color.Empty;
            this.BackButton1.HoverFontColor = System.Drawing.Color.Black;
            this.BackButton1.LineThickness = 1;
            this.BackButton1.Location = new System.Drawing.Point(0, 13);
            this.BackButton1.Margin = new System.Windows.Forms.Padding(6, 4, 6, 4);
            this.BackButton1.Name = "BackButton1";
            this.BackButton1.Size = new System.Drawing.Size(133, 29);
            this.BackButton1.TabIndex = 10;
            this.BackButton1.Click += new System.EventHandler(this.BackButton1_Click);
            // 
            // textBox1
            // 
            this.textBox1.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)));
            this.textBox1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(69)))), ((int)(((byte)(79)))), ((int)(((byte)(89)))));
            this.textBox1.Font = new System.Drawing.Font("Verdana", 12F);
            this.textBox1.ForeColor = System.Drawing.Color.White;
            this.textBox1.Location = new System.Drawing.Point(148, 126);
            this.textBox1.Name = "textBox1";
            this.textBox1.ReadOnly = true;
            this.textBox1.Size = new System.Drawing.Size(328, 27);
            this.textBox1.TabIndex = 11;
            this.textBox1.Text = "  Compressed File Path";
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(43)))), ((int)(((byte)(50)))), ((int)(((byte)(56)))));
            this.panel1.Controls.Add(this.Button2);
            this.panel1.Controls.Add(this.buttons3);
            this.panel1.Controls.Add(this.BackButton1);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(133, 318);
            this.panel1.TabIndex = 20;
            // 
            // Button2
            // 
            this.Button2.BackColor = System.Drawing.Color.Transparent;
            this.Button2.BackgroundColor = System.Drawing.Color.Black;
            this.Button2.BorderColor = System.Drawing.Color.White;
            this.Button2.BorderRadius = 0;
            this.Button2.ButtonText = " Compress";
            this.Button2.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Button2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.Button2.Font_Size = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.Button2.ForeColors = System.Drawing.Color.White;
            this.Button2.HoverBackground = System.Drawing.Color.White;
            this.Button2.HoverBorder = System.Drawing.Color.Empty;
            this.Button2.HoverFontColor = System.Drawing.Color.Black;
            this.Button2.LineThickness = 1;
            this.Button2.Location = new System.Drawing.Point(0, 105);
            this.Button2.Margin = new System.Windows.Forms.Padding(6, 5, 6, 5);
            this.Button2.Name = "Button2";
            this.Button2.Size = new System.Drawing.Size(133, 49);
            this.Button2.TabIndex = 19;
            this.Button2.Click += new System.EventHandler(this.Button2_Click);
            // 
            // buttons3
            // 
            this.buttons3.BackColor = System.Drawing.Color.Transparent;
            this.buttons3.BackgroundColor = System.Drawing.Color.Black;
            this.buttons3.BorderColor = System.Drawing.Color.White;
            this.buttons3.BorderRadius = 0;
            this.buttons3.ButtonText = "Decompress";
            this.buttons3.Cursor = System.Windows.Forms.Cursors.Hand;
            this.buttons3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.buttons3.Font_Size = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.buttons3.ForeColors = System.Drawing.Color.White;
            this.buttons3.HoverBackground = System.Drawing.Color.White;
            this.buttons3.HoverBorder = System.Drawing.Color.Empty;
            this.buttons3.HoverFontColor = System.Drawing.Color.Black;
            this.buttons3.LineThickness = 1;
            this.buttons3.Location = new System.Drawing.Point(0, 159);
            this.buttons3.Margin = new System.Windows.Forms.Padding(6, 5, 6, 5);
            this.buttons3.Name = "buttons3";
            this.buttons3.Size = new System.Drawing.Size(133, 49);
            this.buttons3.TabIndex = 19;
            this.buttons3.Click += new System.EventHandler(this.buttons3_Click);
            // 
            // progressBar1
            // 
            this.progressBar1.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.progressBar1.Location = new System.Drawing.Point(148, 171);
            this.progressBar1.Name = "progressBar1";
            this.progressBar1.Size = new System.Drawing.Size(328, 23);
            this.progressBar1.TabIndex = 21;
            this.progressBar1.Click += new System.EventHandler(this.progressBar1_Click);
            // 
            // label2
            // 
            this.label2.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F);
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(491, 175);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(61, 19);
            this.label2.TabIndex = 22;
            this.label2.Text = "Working";
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(69)))), ((int)(((byte)(79)))), ((int)(((byte)(89)))));
            this.ClientSize = new System.Drawing.Size(611, 349);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.progressBar1);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.textBox1);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.CompressButton1);
            this.Controls.Add(this.BrowseButton);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form2";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "File Compression Tool - Compression";
            this.panel3.ResumeLayout(false);
            this.panel3.PerformLayout();
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private JThinButton.JThinButton BrowseButton;
        private JThinButton.JThinButton CompressButton1;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Label label3;
        private JThinButton.JThinButton BackButton1;
        private System.Windows.Forms.TextBox textBox1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Panel panel1;
        private JThinButton.JThinButton buttons3;
        private JThinButton.JThinButton Button2;
        private System.Windows.Forms.ProgressBar progressBar1;
        private System.Windows.Forms.Label label2;
    }
}