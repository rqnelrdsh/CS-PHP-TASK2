<?php
// door.php - The PHP script that handles the form submission.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the door number from the POST request
    $door = isset($_POST['door']) ? $_POST['door'] : null;

    // Display content based on the door number
    switch ($door) {
        case '1':
            echo "<h1>You Opened Door 1!: The Awakening of Thalorus</h1>";
            echo "<p>Many years ago, in the kingdom of Eldoria, lived Princess Selene, the youngest of the royal bloodline. She had planned to venture into the Forbidden Vale, a place no one dared to go. The Vale was rumored to be cursed, and yet, Selene sought answers about her ancestors, whose lives were lost in a war long past.</p>";
            echo "<p>After days of travel, Selene discovered a glowing dragon egg deep in the heart of the Vale. When she touched it, the earth trembled, and the sky rained down stars. From the egg emerged Thalorus, a dragon born of starlight, whose eyes glowed with ancient wisdom. He revealed that the time of Eldoria’s salvation had arrived, for a great darkness was rising once more.</p>";
            echo "<p>The sorcerer Malrath, who had once sought to control the dragons, was amassing an army of twisted creatures to conquer the kingdom. Thalorus, the last of the Celestial Dragons, told Selene that only the united strength of dragons and humans could stop Malrath.</p>";
            echo "<p>Selene, now bonded to Thalorus, called upon the wizards of the Silver Tower, the knights of the Golden Order, and the druids of the Moonlit Grove. Together, they stood against Malrath’s forces. As Selene learned to wield the ancient magic of the dragons, she discovered her own hidden powers, a gift from her royal lineage.</p>";
             echo "<p>The final battle unfolded at the heart of Eldoria, where dragons clashed with Malrath’s dark magic. With Thalorus at her side, Selene’s newfound strength proved decisive. In a final, devastating strike, Thalorus unleashed a wave of starlight that shattered Malrath’s dark forces. But at great cost—his power spent, the dragon faded into the stars, leaving Selene to rule with wisdom and courage.</p>";
             echo "<p>Eldoria flourished under her reign, but the legend of Selene and Thalorus was passed down through generations. And deep in the Forbidden Vale, a new dragon egg waited—silent, but ready to awaken when the kingdom would need its protector once again.</p>";
            break;
        
        case '2':
            echo "<h1>You Opened Door 2!: The Last Light of Eldrathiel</h1>";
            echo "<p>In the realm of Eldrathiel, a land where elves and fairies lived in harmony for centuries, a mysterious darkness began to spread. The fairies, once joyful and full of light, had started retreating into the shadows, and the magic of the land was fading. Liora, a young elven mage, was determined to find the cause and restore the ancient balance between her people and the fairies.</p>";
            echo "<p>Liora set off to find Queen Talia, the last remaining fairy queen, who had gone into hiding. Along her journey, she encountered Thistle, a mischievous fairy who had long distrusted the elves. Though wary of each other, they joined forces to uncover the truth behind the disturbance.</p>";
             echo "<p>In the depths of the forest, Liora and Thistle discovered a hidden ruin, where an ancient prophecy revealed that a dark elf had betrayed the fairies long ago, stealing their magic to create a shadow that now threatened the entire realm. The prophecy warned that only the union of elves and fairies could restore balance.</p>";
             echo "<p>They traveled to the fairy palace, where Liora and Thistle confronted Queen Talia, who was weakened by the stolen magic. Standing beside her was Alaric, a dark elf who had once been an ally but had fallen to darkness. He had stolen the fairy magic and used it to build his own power.</p>";
             echo "<p>In a fierce battle, Liora faced Alaric, calling upon the elven magic of the Enchanted Grove. Thistle, using his own fairy magic, aided Liora as they worked together to break Alaric’s dark hold. The combined power of their magic shattered his darkness and returned the stolen energy to the fairies.</p>";
              echo "<p>With Alaric’s defeat, the curse was lifted, and the magic of the fairies was restored. Queen Talia, now free from Alaric’s influence, stood strong, her wings glowing with renewed power. The elves and fairies, united once again, celebrated the victory and renewed their ancient bond.</p>";
               echo "<p>Eldrathiel flourished once more, the magic of both elves and fairies thriving together. Liora and Thistle, now friends, looked upon the land with hope, knowing that their unity would protect the realm for generations to come.</p>";
            break;
        
        case '3':
            echo "<h1>You Opened Door 3!</h1>";
            echo "<p>Behind Door 3, you find a beautiful garden filled with exotic flowers and a peaceful atmosphere.</p>";
            break;
        
        default:
            echo "<p>Something went wrong. Please try again.</p>";
            break;
    }
} else {
    echo "<p>No door selected. Please choose a door to open.</p>";
}
?>
