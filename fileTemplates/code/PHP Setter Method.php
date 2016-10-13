/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 */
public ${STATIC} function set_${PARAM_NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}
