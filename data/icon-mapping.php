<?php

function getIconForLesson($title, $content) {
    $combined = strtolower($title . ' ' . $content);

    $iconMap = [
        'introduction' => '🌍',
        'historical' => '📜',
        'history' => '📜',
        'economic' => '💰',
        'trade' => '💰',
        'finance' => '💰',
        'political' => '🏛️',
        'government' => '🏛️',
        'governance' => '🏛️',
        'cultural' => '🎭',
        'culture' => '🎭',
        'media' => '📺',
        'technology' => '💻',
        'digital' => '💻',
        'internet' => '💻',
        'migration' => '👥',
        'refugee' => '👥',
        'diaspora' => '👥',
        'midterm' => '📝',
        'review' => '📝',
        'exam' => '✍️',
        'assessment' => '✍️',
        'environmental' => '🌱',
        'climate' => '🌱',
        'sustainability' => '🌱',
        'inequality' => '⚖️',
        'poverty' => '⚖️',
        'development' => '⚖️',
        'human rights' => '⚖️',
        'rights' => '⚖️',
        'health' => '🏥',
        'pandemic' => '🏥',
        'disease' => '🏥',
        'conflict' => '⚠️',
        'war' => '⚠️',
        'security' => '⚠️',
        'terrorism' => '⚠️',
        'goals' => '🎯',
        'sdg' => '🎯',
        'future' => '🚀',
        'presentation' => '🎤',
        'reflection' => '💭',
    ];

    foreach ($iconMap as $keyword => $icon) {
        if (strpos($combined, $keyword) !== false) {
            return $icon;
        }
    }

    return '📚';
}

function getIconForSearchResult($title, $content) {
    return getIconForLesson($title, $content);
}
?>
